<?php
include "head.php";
if (!($_POST['password'] == ['confirm_password'])) {
    echo "<script>RegisterError('senhas não conferem!');</script>";}

// Obtém os dados do formulário
$nome = $_POST['user'];
$senha = sha1($nome.$_POST['password']);
$tipo = $_POST['tipo'];
$hora = date("d-m-y H:i:s");

// Prepara a query de inserção
$sql = "INSERT INTO usuarios (nome, senha, tipo, hora) VALUES (:nome, :senha, :tipo, :hora)";
$stmt = $con->prepare($sql);

// Define os valores para os marcadores de posição
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
$stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
$stmt->bindValue(':hora', $hora, PDO::PARAM_STR);

// Executa a query
$inserir = $stmt->execute();

// Verifica se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>RegisterSuccess();</script>";
} else {
    echo "<script>RegisterError('erro ao salvar dados');</script>";
}
?>