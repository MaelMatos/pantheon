<?php
require $_SERVER['DOCUMENT_ROOT']."/pantheon/head.php";
?>
<form action="salvar_tecnica.php" method="get" class="centered">
<div class="form-group" style="margin-bottom:5px;">
        <input type="text" class="form-control margem" id="formGroupExampleInput" name="Nome" autocomplete=off placeholder="nome">
      </div>
<select name="tipo" class="form-select" style="margin-bottom:5px;">
    <option selected>Tipo</option>
    <option value="ofensivo">Ofensivo</option>
    <option value="defensivo">Defensivo</option>
    <option value="cura">Cura</option>
    <option value="buff">Buff</option>
    <option value="debuff">Debuff</option>
</select>
<select name="elemento" class="form-select" style="margin-bottom:5px;">
    <option selected>Elemento</option>

    <option value="agua" style="text-align:center">Água</option>
    <option value="gelo">Gelo</option>
    <option value="sangue">Sangue</option>
    <option value="vapor">Vapor</option>
    <option value="acido">Ácido</option>
    
    <option value="fogo" style="text-align:center">Fogo</option>
    <option value="calor">Calor</option>
    <option value="esplosao">Explosão</option>
    
    <option value="ar" style="text-align:center">Ar</option>
    <option value="fumaca">Fumaça</option>
    <option value="som">Som</option>
    
    <option value="terra" style="text-align:center">Terra</option>
    <option value="po">Pó</option>
    <option value="lama">Lama</option>
    <option value="lava">Lava</option>
    <option value="metal">Metal</option>
    
    <option value="energia" style="text-align:center">Energia</option>
    <option value="raio">Raio</option>
    <option value="radiacao">Radiação</option>
    <option value="magnetismo">Magnetismo</option>
    
    <option value="luz" style="text-align:center">Luz</option>
    
    <option value="escuridao" style="text-align:center">Escuridão</option>
    
    <option value="divino" style="text-align:center">Divino</option>
    
    <option value="movimento" style="text-align:center">Movimento</option>
    
    <option value="espaco" style="text-align:center">Espaço</option>
    <option value="gravidade">Gravidade</option>
    
    <option value="materia" style="text-align:center">Matéria</option>
    
    <option value="vida" style="text-align:center">Vida</option>
    <option value="madeira">Madeira</option>
    
    <option value="maldicao" style="text-align:center">Maldição</option>
    
    <option value="tempo" style="text-align:center">Tempo</option>
</select>


<input type="submit" value="Salvar">
</form>