<?php

include __DIR__ . '/../Connection.php';
$pdo = Connection::getConnection();

$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$status = $_POST['status'];

$sql = "INSERT INTO contatos (nome, logradouro, numero, bairro, cidade, estado, email, celular, status) VALUES (:nome, :logradouro, :numero, :bairro, :cidade, :estado, :email, :celular, :status)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':logradouro', $logradouro);
$stmt->bindParam(':numero', $numero);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':celular', $celular);
$stmt->bindParam(':status', $status);

if ($stmt->execute()) {
    header('Location: ../../pages/mensagem.php?sucesso=sucesso&mensagem=Contato inserido com sucesso');
} else {
    header('Location: ../../pages/mensagem.php?sucesso=fracasso&mensagem=Erro ao inserir contato');
}
