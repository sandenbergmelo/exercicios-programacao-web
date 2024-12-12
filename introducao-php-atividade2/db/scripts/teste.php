<?php

include __DIR__ . '/db/Connection.php';

try {
    $conn = Connection::getConnection();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec('SELECT 1');
    echo "Conexão realizada com sucesso\n";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
