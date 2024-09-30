<?php
require "cabecalho.php";
if(!isset($_SESSION['nome'])){
    header('location:index.php');
  }
?>

<h1>bem vindo <?php echo $_SESSION['nome'];?>!</h1>