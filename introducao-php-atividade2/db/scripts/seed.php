<?php

include __DIR__ . '/../Connection.php';

// Faça a seed de dados na tabela contatos
$dados = [
    [
        'nome' => 'Leonardo da Vinci',
        'logradouro' => 'Via delle Arti',
        'numero' => '150',
        'bairro' => 'Centro Histórico',
        'cidade' => 'Florença',
        'estado' => 'Toscana',
        'email' => 'leonardo@mail.com',
        'celular' => '555123456',
        'status' => 1,
    ],
    [
        'nome' => 'Júlio César',
        'logradouro' => 'Rua A',
        'numero' => '123',
        'bairro' => 'Centro',
        'cidade' => 'Roma',
        'estado' => 'Lácio',
        'email' => 'julio@mail.com',
        'celular' => '987654321',
        'status' => 1,
    ],
    [
        'nome' => 'Cleópatra',
        'logradouro' => 'Avenida B',
        'numero' => '456',
        'bairro' => 'Nilo',
        'cidade' => 'Alexandria',
        'estado' => 'Egito',
        'email' => 'cleopatra@mail.com',
        'celular' => '564738291',
        'status' => 1,
    ],
    [
        'nome' => 'Napoleão Bonaparte',
        'logradouro' => 'Rua C',
        'numero' => '789',
        'bairro' => 'Imperial',
        'cidade' => 'Paris',
        'estado' => 'Île-de-France',
        'email' => 'napoleao@mail.com',
        'celular' => '345678912',
        'status' => 0,
    ],
    [
        'nome' => 'Leônidas',
        'logradouro' => 'Travessa Esparta',
        'numero' => '300',
        'bairro' => 'Termópilas',
        'cidade' => 'Esparta',
        'estado' => 'Lacônia',
        'email' => 'leonidas@mail.com',
        'celular' => '678945123',
        'status' => 1,
    ]
];


try {
    $pdo = Connection::getConnection();

    foreach ($dados as $dado) {
        $sql = "INSERT INTO contatos (nome, logradouro, numero, bairro, cidade, estado, email, celular, status)
                VALUES (:nome, :logradouro, :numero, :bairro, :cidade, :estado, :email, :celular, :status)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($dado);
    }

    echo "Dados inseridos com sucesso!\n";
} catch (PDOException $e) {
    echo "Erro ao inserir dados: \n{$e->getMessage()}\n";
}
