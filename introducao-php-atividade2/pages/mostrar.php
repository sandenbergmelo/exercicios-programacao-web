<?php
include __DIR__ . '/../db/Connection.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: mensagem.php?sucesso=fracasso&mensagem=Erro ao buscar contato');
    exit;
}

$conn = Connection::getConnection();
$sql = 'SELECT * FROM contatos WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$contato = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de <?php echo $contato['nome'] ?></title>
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/mostrar.css">
</head>

<body>
    <main>
        <h1><a style="color: #f8f8f2;" href="../index.php">Agenda de contatos</a></h1>
        <section>
            <ul>
                <li><strong>Nome:</strong> <?php echo $contato['nome'] ?></li>
                <li><strong>Logradouro:</strong> <?php echo $contato['logradouro'] ?></li>
                <li><strong>Número:</strong> <?php echo $contato['numero'] ?></li>
                <li><strong>Bairro:</strong> <?php echo $contato['bairro'] ?></li>
                <li><strong>Cidade:</strong> <?php echo $contato['cidade'] ?></li>
                <li><strong>Estado:</strong> <?php echo $contato['estado'] ?></li>
                <li><strong>E-mail:</strong> <?php echo $contato['email'] ?></li>
                <li><strong>Celular:</strong> <?php echo $contato['celular'] ?></li>
                <li><strong>Status:</strong> <?php echo $contato['status'] ? 'Ativo' : 'Inativo' ?></li>
            </ul>
        </section>
        <section>
            <?php
            echo "<a href='../db/scripts/excluir.php?id={$contato['id']}'>[Excluir]</a>\n";
            echo "<a href='atualizar.php?id={$contato['id']}'>[Alterar]</a>\n";
            echo "<a href='../index.php'>[Home]</a>\n";
            ?>
        </section>
    </main>
</body>

</html>
