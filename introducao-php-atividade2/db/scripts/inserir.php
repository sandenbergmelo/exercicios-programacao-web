<?php

include __DIR__ . '/../Connection.php';
$pdo = Connection::getConnection();

$nome = "Alexandre Magno o Grande";
$logradouro = "Um";
$numero = "Dois";
$bairro = "Tres";
$cidade = "Quatro";
$estado = "Cinco";
$email = "alexandre@exemplo.com.br";
$celular = "(99) 999999-9999";
$status = 1;

$sql = "INSERT INTO contatos (nome, logradouro, numero, bairro, cidade, estado, email, celular, status)
        VALUES (:nome, :logradouro, :numero, :bairro, :cidade, :estado, :email, :celular, :status)";
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
    echo "Dados inseridos com sucesso!\n";
} else {
    echo "Erro ao inserir os dados.";
}
