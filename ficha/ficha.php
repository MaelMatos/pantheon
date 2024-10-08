<?php
require "../cabecalho.php";
if (!isset($_GET)){
$id_ficha = $_GET['id_ficha'];
$dados = $con->query("select * where id_ficha = '$id_ficha' from fichas")->fetch(PDO::FETCH_ASSOC);
    $tecnicas = $con->query("select id_tecnica where id_ficha = '$id_ficha' && tipo=='aprendida' from tecnicas-fichas")->fetchAll(PDO::FETCH_ASSOC);
    $tecnicas2 = $con->query("select id_tecnica where id_ficha = '$id_ficha' && tipo=='aprender' from tecnicas-fichas")->fetchAll(PDO::FETCH_ASSOC);
    $itens = $con->query("select id_item where id_ficha = '$id_ficha' && tipo=='coletado' from itens-fichas")->fetchAll(PDO::FETCH_ASSOC);
    $itens2 = $con->query("select id_item where id_ficha = '$id_ficha' && tipo=='coletar' from itens-fichas")->fetchAll(PDO::FETCH_ASSOC);
    include "fichapronta.php";
} else{
    include "fichanova.php";
}
?>