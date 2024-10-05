<?php
require "../cabecalho.php";
$fichas = $con->query("select id_fichas from ficha_usuario where id_usuario=$_SESSION['id_user']")->fetchAll(PDO::FETCH_ASSOC);
foreach($fichas as $ficha){
    $ficha = $con->query("select * from fichas where id_ficha=$ficha")->fetch(PDO::FETCH_ASSOC);
    
}

?>