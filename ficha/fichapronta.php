<?php
require "../head.php";
?>


<form action="atualizaficha.php" method="post">
<!-- informações adicionais -->
    <div class="input-group">
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" value="<?php echo $dados['nome'];?>" name="nome">
            <label for="floatingInput">nome do personagem</label>
        </div>
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" value="<?php echo $dados['mestre'];?>" name="mestre">
            <label for="floatingInput">mestre</label>
        </div>
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" value="<?php echo $dados['campanha'];?>" name="campanha">
            <label for="floatingInput">campanha</label>
        </div>
    </div>
   <!--  atributos 1 -->
    <div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['FOR'];?>" name="FOR">
            <label for="floatingInput">força</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['RES'];?>" name="RES">
            <label for="floatingInput">resistencia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['AG'];?>" name="AG">
            <label for="floatingInput">agilidade</label>
        </div>
    </div>
    <!-- atributos 2 -->
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['HAB'];?>" name="HAB">
            <label for="floatingInput">habilidade</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['INT'];?>" name="INT">
            <label for="floatingInput">inteligencia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['PD'];?>" name="PD">
            <label for="floatingInput">poder</label>
        </div>
    </div>
    <!-- atributos secundarios -->
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['CA'];?>" name="CA">
            <label for="floatingInput">Classe de Armadura</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['OM'];?>" name="OM">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['OMMAX'];?>" name="OMMAX">
            <label for="floatingInput">Omnergia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['HP'];?>" name="HP">
            <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['HPMAX'];?>" name="HPMAX">
            <label for="floatingInput">Vida</label>
        </div>
    </div>
</form>