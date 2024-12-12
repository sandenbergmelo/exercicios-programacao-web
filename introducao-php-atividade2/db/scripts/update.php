<?php

include __DIR__ . '/../Connection.php';
$pdo = Connection::getConnection();

$id = $_REQUEST['id'] ?? null;

var_dump($id);

if (!$id) {
    header('Location: ../../pages/mensagem.php?sucesso=fracasso&mensagem=Erro ao atualizar contato');
    exit;
}

$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$status = $_POST['status'];

$sql = "UPDATE contatos SET nome = :nome, logradouro = :logradouro, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, email = :email, celular = :celular, status = :status WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
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
    header('Location: ../../pages/mensagem.php?sucesso=sucesso&mensagem=Contato atualizado com sucesso');
} else {
    header('Location: ../../pages/mensagem.php?sucesso=fracasso&mensagem=Erro ao atualizar contato');
}
