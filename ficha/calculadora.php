<?php
include "../cabecalho.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora2.php" method="get">
        <div class="input-group input-group-prepend">
         <div class="form-floating mb-3">
         <input type="number" class="form-control" id="floatingInput" value="0" name="ra">
         <label for="floatingInput">resistencia/poder antiga</label>
         </div>
         <div class="form-floating mb-3">
         <input type="number" class="form-control" id="floatingInput" value="0" name="rn">
         <label for="floatingInput">resistencia/poder nova</label>
         </div>
         <div class="form-floating mb-3">
         <input type="number" class="form-control" id="floatingInput" value="0" name="va">
         <label for="floatingInput">vida/energia maxima atual</label>
        </div>      
         <div class="form-floating mb-3">
         <input type="number" class="form-control" id="floatingInput" value="0" name="m">
         <label for="floatingInput">modificador por ponto</label>
         </div>
         <span class="input-group-text " id="basic-addon1">dado de vida:</span>
         <select class="custom-select" id="inputGroupSelect04">
             <option value="20">D20</option>
             <option value="10">D10</option>
             <option value="6">D6</option>
            </select>
         <input class="btn btn-outline-secondary" type="subimit" value="calcular">
        </div>
        </div>
    </form>
</body>
</html>