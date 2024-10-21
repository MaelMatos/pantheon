<?php
include "../head.php";
$id_usuario = $_SESSION['id_user'];
$last_edit = date("d-m-y H:i:s");
$nome = $_POST["nome"];
$mestre = $_POST["mestre"];
$campanha = $_POST["campanha"];
$FOR = $_POST["FOR"];
$RES = $_POST["RES"];
$AG = $_POST["AG"];
$HAB = $_POST["HAB"];
$INT = $_POST["INT"];
$PD = $_POST["PD"];
$CO = $_POST["CO"];
$CF = $_POST["CF"];
$CA = $_POST["CA"];
$OM = $_POST["OM"];
$OMMAX = $_POST["OMMAX"];
$HP = $_POST["HP"];
$HPMAX = $_POST["HPMAX"];
$info = $_POST["info"];

if(isset($_POST["id_ficha"])){
    $id_ficha = $_POST["id_ficha"];

    // Update existing character sheet
    $sql = "UPDATE fichas SET nome = :nome, mestre = :mestre, campanha = :campanha, _FOR = :_FOR, RES = :RES, AG = :AG, HAB = :HAB, _INT = :_INT, PD = :PD, CO = :CO, CF = :CF, OM = :OM, OMMAX = :OMMAX, HP = :HP, HPMAX = :HPMAX, info = :info, LAST_EDIT = :LAST_EDIT WHERE id_ficha = :id_ficha";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":mestre", $mestre);
    $stmt->bindParam(":campanha", $campanha);
    $stmt->bindParam(":_FOR", $FOR);
    $stmt->bindParam(":RES", $RES);
    $stmt->bindParam(":AG", $AG);
    $stmt->bindParam(":HAB", $HAB);
    $stmt->bindParam(":_INT", $INT);
    $stmt->bindParam(":PD", $PD);
    $stmt->bindParam(":CO", $CO);
    $stmt->bindParam(":CF", $CF);
    $stmt->bindParam(":CA", $CA);
    $stmt->bindParam(":OM", $OM);
    $stmt->bindParam(":OMMAX", $OMMAX);
    $stmt->bindParam(":HP", $HP);
    $stmt->bindParam(":HPMAX", $HPMAX);
    $stmt->bindParam(":info", $info);
    $stmt->bindParam(":LAST_EDIT", $last_edit);
    $stmt->bindParam(":id_ficha", $id_ficha);

    if($stmt->execute()){
        echo "Ficha atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a ficha.";
    }
} else {
    // Create new character sheet
    $sql = "INSERT INTO fichas (nome, mestre, campanha, _FOR, RES, AG, HAB, _INT, PD, CO, CF, OM, OMMAX, HP, HPMAX, info, LAST_EDIT) VALUES (:nome, :mestre, :campanha, :_FOR, :RES, :AG, :HAB, :_INT, :PD, :CO, :CF, :OM, :OMMAX, :HP, :HPMAX, :info, :LAST_EDIT)";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":mestre", $mestre);
    $stmt->bindParam(":campanha", $campanha);
    $stmt->bindParam(":_FOR", $FOR);
    $stmt->bindParam(":RES", $RES);
    $stmt->bindParam(":AG", $AG);
    $stmt->bindParam(":HAB", $HAB);
    $stmt->bindParam(":_INT", $INT);
    $stmt->bindParam(":PD", $PD);
    $stmt->bindParam(":CO", $CO);
    $stmt->bindParam(":CF", $CF);
    $stmt->bindParam(":CA", $CA);
    $stmt->bindParam(":OM", $OM);
    $stmt->bindParam(":OMMAX", $OMMAX);
    $stmt->bindParam(":HP", $HP);
    $stmt->bindParam(":HPMAX", $HPMAX);
    $stmt->bindParam(":info", $info);
    $stmt->bindParam(":LAST_EDIT", $last_edit);

    if($stmt->execute()){
        $id_ficha = $con->lastInsertId();
        $sql = "INSERT INTO ficha_usuario (id_ficha, id_usuario) VALUES (:id_ficha, :id_usuario)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id_ficha", $id_ficha);
        $stmt->bindParam(":id_usuario", $id_usuario);//bug: retorna o erro "Warning: Array to string conversion"

        if($stmt->execute()){
            echo "<script src='sucessoficha.js'></script>";
        } else {
            echo "Erro ao associar a ficha ao usuário.";
        }
    } else {
        echo "Erro ao criar a ficha.";
    }
}
?>