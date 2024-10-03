<?php
require "head.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav-link{color:white;background-color:dark};
    </style>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="<?php echo $root;?>/home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="<?php echo $root;?>/logo.png" class="bi me-2" style="width:40px;height:32px;">
        <span class="fs-4">Panteão</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?php echo $root;?>/ficha/ficha.php" class="nav-link">Fichas</a></li>
        <li class="nav-item"><a href="<?php echo $root;?>/ficha/calculadora.php" class="nav-link">Calculadora</a></li>
        <li class="nav-item"><a href="<?php echo $root;?>/wiki/tecnicas/criar_tecnica.php" class="nav-link">Criar Técnicas</a></li>
        <a href="<?php echo $root;?>/session_destroy.php?n=true"><button class="btn btn-danger">Sair</button></a>
      </ul>
    </header>
  </div>
<!-- <div class="head">
<a href="<?php echo $root;?>/home.php"><img src="<?php echo $root;?>/logo.png" style="height:50px;width:auto" /></a>
<a href="<?php echo $root;?>/session_destroy.php?n=true"><button class="btn btn-danger">Sair</button></a>
</div> -->
    
</body>
</html>