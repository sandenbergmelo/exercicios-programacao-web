<?php

class Connection
{
    private static $instance = null;
    private $connection = null;

    private $host = '127.0.0.1';
    private $dbname = 'AppAgendaWeb';
    private $username = 'docker';
    private $password = 'docker';

    private function __construct()
    {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão com o banco de dados:\n{$e->getMessage()} \n");
        }
    }

    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connection;
    }
}
