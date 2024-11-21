<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Produto</title>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        die("<h1>ID do produto não fornecido.</h1>");
    }
    ?>

    <main>
        <h1>Avaliar Produto <?= $id; ?></h1>
        <form action="processarnota.php" method="POST">
            <section>
                <label for="nota">Nota (1 a 5):</label>
                <select name="nota" id="nota" required>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                <input type="hidden" name="id" value="<?= $id; ?>">
            </section>
            <button type="submit">Enviar Avaliação</button>
        </form>
    </main>
</body>

</html>
