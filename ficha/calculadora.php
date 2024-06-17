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
        <input type="number" name="ra" placeholder="resistencia/poder antiga" value="0">
        <input type="number" name="rn" placeholder="resistencia/poder nova" value="0">
        <input type="number" name="va" placeholder="vida/energia maxima atual" value="0">
        <input type="number" name="m" placeholder="modificador por ponto" value="0">
        <label>dado de vida:</label><select name="nl">
            <option value="20">D20</option>
            <option value="6">D6</option>
        </select>
        <input type="submit" value="calcular">
    </form>
</body>
</html>