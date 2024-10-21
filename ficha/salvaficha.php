<?php
include "../head.php";
include "func_fichas.php";
$id_usuario = $_SESSION['id_user'];
DefFichaVars($_POST);//$_POST['variavel'] = $variavel
if (isset($id_ficha)) {// se houver um id de ficha,atualiza ela
    $sql = "UPDATE fichas SET  nome = :nome, mestre = :mestre, campanha = :campanha, _FOR = :_FOR, RES = :RES, AG = :AG, HAB = :HAB, _INT = :_INT, PD = :PD, CO = :CO, CF = :CF, OM = :OM, OMMAX = :OMMAX, HP = :HP, HPMAX = :HPMAX, info = :info, LAST_EDIT = :LAST_EDIT WHERE id_ficha = :id_ficha";
    $stmt = $con->prepare($sql);
    DefFichaPar($stmt);
    if ($stmt->execute()) {
    echo "Ficha atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a ficha.";
    }
}
else {// Caso não haja uma ficha cadastrada, cria uma nova
    $sql = "DECLARE @id_ficha INT;
            INSERT INTO fichas (nome, mestre, campanha, _FOR, RES, AG, HAB, _INT, PD, CO, CF, OM, OMMAX, HP, HPMAX, info, LAST_EDIT) OUTPUT inserted.Id_ficha INTO @id_ficha VALUES (:nome, :mestre, :campanha, :_FOR, :RES, :AG, :HAB, :_INT, :PD, :CO, :CF, :OM, :OMMAX, :HP, :HPMAX, :info, :LAST_EDIT);
            INSERT INTO ficha_usuario(id_ficha, id_usuario) VALUES (@id_ficha, :id_usuario);
            ";
    $stmt = $con->prepare($sql);
    DefFichaPar($stmt);
    $stmt->bindParam(":id_usuario", $id_usuario);
    if ($stmt->execute()) {
        // se tudo der certo(o que provavelmente não vai), tenta associar a ficha ao usuario ao bd
        echo "<script src='sucessoficha.js'></script>";
    } else {
        echo "Erro ao criar a ficha.";
    }
}
?>