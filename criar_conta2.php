<?php
include "head.php";

// Obtém os dados do formulário
$nome = $_POST['user'];
$senha = sha1($nome.$_POST['pw']);
$tipo = $_POST['tipo'];

// Prepara a query de inserção
$sql = "INSERT INTO usuarios (nome, senha, tipo) VALUES (:nome, :senha, :tipo)";
$stmt = $con->prepare($sql);

// Define os valores para os marcadores de posição
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
$stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);

// Executa a query
$inserir = $stmt->execute();

// Verifica se a inserção foi bem-sucedida
if ($inserir) {
    header('Location: sucesso_cadastro.html');
} else {
    header('Location: erro_cadastro.html');
}
?>