<?php
$nome = $_POST['user'];
$senha = $_POST['pw'];
require "head.php";

//coletar usuario e senha do formulario (index.php)

//encriptar senha
$senha_hash = sha1($nome.$senha);

/* $epw = password_hash($pw, PASSWORD_ARGON2ID); */
if($debug){
    echo "<script>console.log('senha:".$senha."')</script>";
    echo "<script>console.log('senha encriptada:".$senha_hash."')</script>";
}

//coleta senha e compara no banco de dados
$sql = "SELECT senha FROM usuarios WHERE nome = :nome";
$stmt = $con->prepare($sql);
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$senha_banco = $stmt->execute();
$senha_banco = $stmt->fetch(PDO::FETCH_ASSOC);
$senha_banco = $senha_banco['senha'];
if($debug){
    echo "<script>console.log('senha no banco de dados: ".$senha_banco."')</script>";
}

//compara resultados e altera os valores
if($senha_hash == $senha_banco){
    //coleta id do usuario
    $id_user = $con->query("select id_usuario from usuarios where nome='$nome'")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['nome'] = $nome;
    $_SESSION['id_user'] = $id_user['id_usuario'];
    header("location:index.php");
}
else if(!$debug){
    echo "<script>LoginError();</script>";
}
?>