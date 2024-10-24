<?php
include "head.php";
if (!($_POST['password'] == ['confirm_password'])) {
    echo "<script>RegisterError('senhas não conferem!');</script>";}

// Obtém os dados do formulário
$nome = $_POST['user'];
$senha = sha1($nome.$_POST['password']);
$tipo = $_POST['tipo'];
$hora = date("d-m-y H:i:s");
$email = $_POST['email'];
VerifyEmail($email);
?>
<form method="post" action="criar_conta3.php">
<label>enviamos um código de 6 digitos para verifiacação do seu email,por favor insira-o abaixo</label>
<input type="text" name="codigo_email" required>
<input type="hidden" name="nome" value="<?php echo $nome;?>">
<input type="hidden" name="tipo" value="<?php echo $tipo;?>">
<input type="hidden" name="senha" value="<?php echo $senha;?>">
<input type="hidden" name="hora" value="<?php echo $hora;?>">
<input type="hidden" name="email" value="<?php echo $email;?>">
<input type="submit" value="continuar" class="button">
</form>