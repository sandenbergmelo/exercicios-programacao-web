<?php
include __DIR__ . '/../db/Connection.php';

$conn = Connection::getConnection();
$sql = "SELECT * FROM contatos";
$result = $conn->query($sql);

$dados = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <meta charset=”utf8”>
    <title>Agenda de contatos</title>
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/agenda.css">
</head>

<body>

    <main>
        <h1>Agenda de contatos</h1>
        <button onclick="window.location.href='criar.php'">Novo</button>
        <table style="margin: auto;">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
            <?php
            $line_count = 1;
            foreach ($dados as $linha) {
                echo "<tr>";
                echo "<td>{$linha['id']}</td>";
                echo "<td><a href='mostrar.php?id={$linha['id']}'>{$linha['nome']}</a></td>";
                echo "<td>{$linha['email']}</td>";
                echo "<td>{$linha['celular']}</td>";

                echo "<td class='a'><a href='atualizar.php?id={$linha['id']}'>[Alterar]</a> ";
                echo "<a href='excluir.php?id={$linha['id']}'>[Excluir]</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>

</body>

</html>
