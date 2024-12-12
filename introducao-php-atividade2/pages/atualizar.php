<?php
include __DIR__ . '/../db/Connection.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: mensagem.php?mensagem=ID não informado&sucesso=fracasso');
    exit;
}

$conn = Connection::getConnection();
$sql = "SELECT * FROM contatos WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if (!$stmt->execute()) {
    header('Location: mensagem.php?mensagem=Erro ao buscar contato&sucesso=fracasso');
    exit;
}

$contato = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/criar.css">
    <title>Atualizar dados de um contato</title>
</head>

<body>
    <main>
        <h1>Atualizar dados do contato</h1>
        <form action="../db/scripts/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($contato['id']); ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?php echo htmlspecialchars($contato['nome']); ?>">
            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" required value="<?php echo htmlspecialchars($contato['logradouro']); ?>">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" required pattern="\d*" title="Apenas números são permitidos" value="<?php echo htmlspecialchars($contato['numero']); ?>">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" required value="<?php echo htmlspecialchars($contato['bairro']); ?>">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" required value="<?php echo htmlspecialchars($contato['cidade']); ?>">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" required value="<?php echo htmlspecialchars($contato['estado']); ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="<?php echo htmlspecialchars($contato['email']); ?>">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" id="celular" required pattern="\d*" title="Apenas números são permitidos" value="<?php echo htmlspecialchars($contato['celular']); ?>">
            <p>Status: </p>
            <span>
                <input type="radio" id="ativo" name="status" value="1" <?php echo $contato['status'] == 1 ? 'checked' : ''; ?>>
                <label for="ativo">Ativo</label>
                <br>
                <input type="radio" id="inativo" name="status" value="0" <?php echo $contato['status'] == 0 ? 'checked' : ''; ?>>
                <label for="inativo">Inativo</label>
            </span>

            <button type="submit">Enviar</button>
            <button type="button" onclick="window.location.href='../index.php'">Home</button>
        </form>
    </main>
</body>

</html>
