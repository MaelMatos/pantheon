<?php
require "head.php";
?>
<form method="post" action="criar_conta2.php" class="centered">
<label>qual o tipo de conta será criada?</label>
<div class="form-check">
      <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="mestre">
      <label class="form-check-label" for="flexRadioDefault1">
        mestre
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault2" value="jogador">
      <label class="form-check-label" for="flexRadioDefault2">
        jogador
      </label>
    </div>
    <div class="input-gruop">
        
        <input type="text" name="user" class="form-control"placeholeder="nome de usuario">
        <input type="text" name="pw" class="form-control" placeholeder="nome de usuario">
    </div>
<input type="submit" value="continuar">
</form>