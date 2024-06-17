<?php
include "../sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="ra" placeholder="resistencia/poder antiga" value="0">
        <input type="number" name="rn" placeholder="resistencia/poder nova">
        <input type="number" name="rn" placeholder="modificador por ponto" value="0">
        <input type="submit" value="calcular">
    </form>
</body>
</html>