<?php
$acesso['fichas'] = $con->query("select id_ficha from usuario-ficha where id_usuario = $_SESSION['id_user']")->fetch(PDO::FETCH_ASSOC);
$acesso['tecnicas'] = []
foreach($acesso['fichas'] as $ficha){
    $acesso['tecnicas'] = $acesso['tecnicas'] + $con->query("select id_tecnica from ficha-tecnica where id_ficha = $ficha")->fetch(PDO::FETCH_ASSOC);
}
$_SESSION['acesso'] = $acesso;
?>