<?php
$titulo = $_GET['titulo'] ?? 'Página sem título';
$sucesso = $_GET['sucesso'] ?? 'desconhecido';
$mensagem = $_GET['mensagem'] ?? 'Mensagem não encontrada';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>{$titulo}</title>";
    ?>
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/mensagem.css">
</head>

<body>
    <main>
        <section>
            <?php

            if ($sucesso == 'sucesso') {
                echo "<h1 style='color: #50fa7b;'>$mensagem</h1>";
            } elseif ($sucesso == 'fracasso') {
                echo "<h1 style='color: #ff5555;'>$mensagem</h1>";
            } else {
                echo "<h1>$mensagem</h1>";
            }
            ?>
        </section>
        <button onclick="window.location.href='criar.php'">Cadastrar outro</button>
        <button onclick="window.location.href='../index.php'">Tela inicial</button>
    </main>
</body>

</html>
