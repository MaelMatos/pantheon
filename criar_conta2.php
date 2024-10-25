<?php
$location = "";
include "head.php";
if (!($_POST['password'] == $_POST['confirm_password'])) {
    echo "<script>RegisterError('senhas não conferem!');</script>";
    exit();}

$nome = $_POST['user'];
if ($con->query("select * from usuarios where nome = '".$nome."'")->fetch(PDO::FETCH_ASSOC)){
    echo "<script>RegisterError('Nome de usuário já existe!');</script>";
    exit();
}
// Obtém os dados do formulário
$senha = sha1($nome.$_POST['password']);
$tipo = $_POST['tipo'];
$hora = date("d-m-y H:i:s");
$email = $_POST['email'];
$code = VerifyEmail($email)[1];
if($debug){
    echo "<script>console.log($code);</script>";
}
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