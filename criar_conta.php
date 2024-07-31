<form method="post" action="criar_conta2.php">
    <label>qual o tipo de conta será criada?</label>
<input type="radio" name="tipo" value="mestre">
<input type="radio" name="tipo" value="jogador">
<input type="hiddden" value="<?php echo $user;?>">
<input type="hiddden" value="<?php echo $pw;?>">
<input type="submit" value="continuar">
</form>