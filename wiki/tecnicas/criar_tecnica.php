<?php
require $_SERVER['DOCUMENT_ROOT']."/pantheon/head.php";
?>
<form action="salvar_tecnica.php" method="get" class="centered">
<div class="form-group">
        <input type="text" class="form-control margem" id="formGroupExampleInput" name="Nome" autocomplete=off placeholder="nome">
      </div>
<select name="tipo" class="form-select">
    <option selected>Tipo</option>
    <option value="ofensivo">Ofensivo</option>
    <option value="defensivo">Defensivo</option>
    <option value="cura">Cura</option>
    <option value="buff">Buff</option>
    <option value="debuff">Debuff</option>
</select>

<input type="submit" value="Salvar">
</form>