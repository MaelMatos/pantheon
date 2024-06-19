<?php
require "../cabecalho.php";
$id_ficha = $_POST['id_ficha'];
$dados = $con->query("select * where id_ficha = '$id_ficha' from fichas")->fetch(PDO::FETCH_ASSOC);
if (!isset($dados)){
    $tecnicas = $con->query("select id_tecnica where id_ficha = '$id_ficha' from tecnicas-fichas");
    $itens = $con->query("select id_item where id_ficha = '$id_ficha' from itens-fichas");
    include "fichapronta.php";
} else{
    include "fichanova.php";
}
?>