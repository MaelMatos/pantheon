<?php
require "head.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$hora = $_POST['hora'];
$email = $_POST['email'];
// Prepara a query de inserção
$sql = "INSERT INTO usuarios (nome, senha, tipo, hora, email) VALUES (:nome, :senha, :tipo, :hora, :email)";
$stmt = $con->prepare($sql);

// Define os valores para os marcadores de posição
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
$stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
$stmt->bindValue(':hora', $hora, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);

// Executa a query
$inserir = $stmt->execute();

// Verifica se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>RegisterSuccess();</script>";
} else {
    echo "<script>RegisterError('erro ao salvar dados');</script>";
}
?>