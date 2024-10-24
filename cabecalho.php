<?php
require "head.php";

?>
    <style>
        .nav-link{color:white;background-color:dark};
    </style>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="<?php echo $root;?>/home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="<?php echo $root;?>/logo.png" class="bi me-2" style="width:50px;height:auto;">
        <span class="fs-4" style="color:white">Panteão</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?php echo $root;?>/ficha/lista_fichas.php" class="nav-link">Fichas</a></li>
        <li class="nav-item"><a href="<?php echo $root;?>/ficha/calculadora.php" class="nav-link">Calculadora</a></li>
        <?php
        if($_SESSION['tipo'] == "mestre"){
          echo "<li class='nav-item'><a href='$root/ficha/criar_tecnica.php' class='nav-link'>Criar Tecnica</a></li>";}
        ?>
        <a href="<?php echo $root;?>/session_destroy.php?n=true"><button class="btn btn-danger">Sair</button></a>
      </ul>
    </header>
  </div>

