<?php
require "head.php";
if(isset($_SESSION['nome'])){
  'location:wiki/home.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
<!--     <link rel="stylesheet" href="form.css"> -->
<style>
    .margem{margin-bottom:15px;}
    .cor{background-color:#F1F0E8}
    .centered {position: fixed; top: 50%; left: 50%;
          /* bring your own prefixes */
           transform: translate(-50%, -50%); text-align: center;}
</style>
</head>
<body class="cor">
  <div class="centered">

    <form action="login.php" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Usuario</label>
        <input type="text" class="form-control margem" id="formGroupExampleInput" name="user" autocomplete=off>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Senha</label>
        <input type="password" class="form-control margem" id="formGroupExampleInput2" name="pw">
        <button type="submit" name="bt" value="true">entrar</button>
        <button type="submit" name="bt" value="false">criar conta</button>
      </div>
    </form>
  </div>
</body>
</html>
