<?php
require "../cabecalho.php";
$id_ficha = $_POST['id_ficha'];
$dados = $con->query("select * where id_ficha = '$id_ficha'");
?>

<div class="input-group">
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" value="<?php echo $dados['FOR']?>" name="FOR">
        <label for="floatingInput">força</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
        <label for="floatingInput">resistencia</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
         <label for="floatingInput">agilidade</label>
        </div>
    </div>
    
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
            <label for="floatingInput">habilidade</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
            <label for="floatingInput">inteligencia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
            <label for="floatingInput">poder</label>
        </div>
    </div>
    

