<?php
function DefFichaVars($_POST){
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
    $OM = $_POST["OM"];
    $OMMAX = $_POST["OMMAX"];
    $HP = $_POST["HP"];
    $HPMAX = $_POST["HPMAX"];
    $info = $_POST["info"];
    if(isset($_POST["id_ficha"])){
    $id_ficha = $_POST["id_ficha"];
    }
}
function DefFichaPar($stmt){
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
    $stmt->bindParam(":OM", $OM);
    $stmt->bindParam(":OMMAX", $OMMAX);
    $stmt->bindParam(":HP", $HP);
    $stmt->bindParam(":HPMAX", $HPMAX);
    $stmt->bindParam(":info", $info);
    $stmt->bindParam(":LAST_EDIT", $last_edit);
    if(isset($id_ficha)){
        $stmt->bindParam(":id_ficha", $id_ficha);
    }
    return $stmt;
}

?>