<?php
require "../cabecalho.php";
$id_ficha = $_POST['id_ficha'];
$dados = $con->query("select * where id_ficha = '$id_ficha'")->fetch(PDO::FETCH_ASSOC);
if (!isset($dados)){
    include "fichapronta.php";
} else{
    include "fichanova.php";
}
?>