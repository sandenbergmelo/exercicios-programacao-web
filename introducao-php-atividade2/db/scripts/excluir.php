<?php

include __DIR__ . '/../Connection.php';
$pdo = Connection::getConnection();

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: ../../pages/mensagem.php?sucesso=fracasso&mensagem=ID não informado');
    exit;
}

$sql = "DELETE FROM contatos WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    header('Location: ../../pages/mensagem.php?sucesso=sucesso&mensagem=Contato excluído com sucesso');
} else {
    header('Location: ../../pages/mensagem.php?sucesso=fracasso&mensagem=Erro ao excluir contato');
}
