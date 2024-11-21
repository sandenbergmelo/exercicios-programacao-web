<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Avaliação de produtos</title>
</head>

<body>
    <main>
        <h1>Clique no produto que deseja avaliar: </h1>
        <ol class="lista-de-produtos">
            <?php
            $produtos = [
                1 => "Celular Samsung Galaxy S23",
                2 => "Notebook Dell Inspiron 15",
                3 => "Smart TV LG 55' OLED",
                4 => "Fone de Ouvido Sony WH-1000XM4",
                5 => "Relógio Apple Watch Series 9"
            ];
            foreach ($produtos as $id => $produto) {
                echo "<li><a target='_blank' href='avaliar_produto.php?id=$id'>$produto</a></li>";
            }
            ?>
        </ol>

    </main>
</body>

</html>
