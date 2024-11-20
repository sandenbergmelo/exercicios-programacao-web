<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <main>
        <h1>Boas Vindas!</h1>
        <?php
        session_start();

        $nome = $_COOKIE['nome'] ?? 'Visitante';
        $idade = $_SESSION['idade'] ?? 'Desconhecida';

        echo "<p>Olá, $nome! Você tem $idade anos!</p>";
        ?>
    </main>
</body>

</html>
