<?php
require "head.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="display: inline">
<a href="home.php"><img src="logo.png" style="height:100px;widith:auto"></a>
<form action="session_destroy.php" method="get"> <input type="hidden" name="n" value="true"><input type="submit" value="sair" class="btn btn-danger"></form>

</div>
    
</body>
</html>