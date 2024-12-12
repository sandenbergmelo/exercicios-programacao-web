<?php

include __DIR__ . '/Connection.php';

try {
    $connection = Connection::getConnection();

    $sql = file_get_contents(__DIR__ . '/sql/schema.sql');

    $connection->exec($sql);

    echo "Database criado com sucesso\n";
} catch (PDOException $e) {
    echo $e->getMessage();
}
