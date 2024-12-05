<!DOCTYPE html>
<html lang="en">
<head>
<?php
$location = "";
require "head.php";
if(isset($_SESSION['nome'])){
  header('location:home.php');
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
<!--     <link rel="stylesheet" href="form.css"> -->
<style>
    .margem{margin-bottom:15px;}
</style>
</head>
<body>
  <div class="centered">

    <form action="login.php" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Usuario</label>
        <input type="text" class="form-control margem" id="formGroupExampleInput" name="user" autocomplete=off>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Senha</label>
        <input type="password" class="form-control margem" id="formGroupExampleInput2" name="password">
        <input type="submit" value="entrar" class="button">  
        <button class="button"><a href="criar_conta.php" class="button">criar conta</a></button>
      </div>
    </form>
  </div>
</body>
</html>
