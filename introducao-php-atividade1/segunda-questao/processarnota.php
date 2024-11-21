<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nota da avaliação</title>
</head>

<body>
    <?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        die("<h1>ID do produto não fornecido.</h1>");
    }

    if (isset($_POST['nota'])) {
        $nota = $_POST['nota'];
    } else {
        die("<h1>Nota não fornecida.</h1>");
    }
    ?>

    <main>
        <h1>Produto <?= $id ?> avaliado com nota <?= $nota ?></h1>
    </main>
</body>

</html>
