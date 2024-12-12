<?php

include __DIR__ . '/../Connection.php';
$pdo = Connection::getConnection();

$id = 1;

$sql = "DELETE FROM contatos WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Registro excluído com sucesso!\n";
} else {
    echo "Erro ao excluir registro.\n";
}
