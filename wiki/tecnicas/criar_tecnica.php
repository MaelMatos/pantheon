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
    <optgroup></optgroup>
    <option value="agua" style="text-align:center">Água</option>
    <option value="gelo">Gelo</option>
    <option value="sangue">Sangue</option>
    <option value="vapor">Vapor</option>
    <option value="acido">Ácido</option>
    <optgroup></optgroup>
    <option value="fogo" style="text-align:center">Fogo</option>
    <option value="calor">Calor</option>
    <option value="esplosao">Explosão</option>
    <optgroup></optgroup>
    <option value="ar" style="text-align:center">Ar</option>
    <option value="fumaca">Fumaça</option>
    <option value="som">Som</option>
    <optgroup></optgroup>
    <option value="terra" style="text-align:center">Terra</option>
    <option value="po">Pó</option>
    <option value="lama">Lama</option>
    <option value="lava">Lava</option>
    <option value="metal">Metal</option>
    <optgroup></optgroup>
    <option value="energia" style="text-align:center">Energia</option>
    <option value="raio">Raio</option>
    <option value="radiacao">Radiação</option>
    <option value="magnetismo">Magnetismo</option>
    <optgroup></optgroup>
    <option value="luz" style="text-align:center">Luz</option>
    <optgroup></optgroup>
    <option value="escuridao" style="text-align:center">Escuridão</option>
    <optgroup></optgroup>
    <option value="divino" style="text-align:center">Divino</option>
    <optgroup></optgroup>
    <option value="movimento" style="text-align:center">Movimento</option>
    <optgroup></optgroup>
    <option value="espaco" style="text-align:center">Espaço</option>
    <option value="gravidade">Gravidade</option>
    <optgroup></optgroup>
    <option value="materia" style="text-align:center">Matéria</option>
    <optgroup></optgroup>
    <option value="vida" style="text-align:center">Vida</option>
    <option value="madeira">Madeira</option>
    <optgroup></optgroup>
    <option value="maldicao" style="text-align:center">Maldição</option>
    <optgroup></optgroup>
    <option value="tempo" style="text-align:center">Tempo</option>
</select>

<select name="rank" class="form-select" style="margin-bottom:5px;">
<option selected>Rank</option>
<optgroup></optgroup>
<option value="ss++">SS++</option>
<option value="ss+">SS+</option>
<option value="ss">SS</option>
<option value="ss-">SS-</option>
<option value="ss--">SS--</option>
<optgroup></optgroup>
<option value="s++">S++</option>
<option value="s+">S+</option>
<option value="s">S</option>
<option value="s-">S-</option>
<option value="s--">S--</option>
<optgroup></optgroup>
<option value="a++">A++</option>
<option value="a+">A+</option>
<option value="a">A</option>
<option value="a-">A-</option>
<option value="a--">A--</option>
<optgroup></optgroup>
<option value="b++">B++</option>
<option value="b+">B+</option>
<option value="b">B</option>
<option value="b-">B-</option>
<option value="b--">B--</option>
<optgroup></optgroup>
<option value="c++">C++</option>
<option value="c+">C+</option>
<option value="c">C</option>
<option value="c-">C-</option>
<option value="c--">C--</option>
<optgroup></optgroup>
<option value="d++">D++</option>
<option value="d+">D+</option>
<option value="d">D</option>
<option value="d-">D-</option>
<option value="d--">D--</option>
<optgroup></optgroup>
<option value="e++">E++</option>
<option value="e+">E+</option>
<option value="e">E</option>
<option value="e-">E-</option>
<option value="e--">E--</option>
<optgroup></optgroup>
<option value="f++">F++</option>
<option value="f+">F+</option>
<option value="f">F</option>
<option value="f-">F-</option>
<option value="f--">F--</option>
</select>
<input type="submit" value="Salvar">
</form>