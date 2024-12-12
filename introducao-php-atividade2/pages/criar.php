<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo contato</title>
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/criar.css">
</head>

<body>
    <main>
        <h1>Criar novo contato</h1>
        <form action="../db/scripts/inserir.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" required>
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" required pattern="\d*" title="Apenas números são permitidos">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" required>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" required>
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="celular">Celular:</label>
            <input type="text" name="celular" id="celular" required pattern="\d*" title="Apenas números são permitidos">
            <p>Status: </p>
            <span>
                <input type="radio" id="ativo" name="status" value="1">
                <label for="ativo">Ativo</label>
                <br>
                <input type="radio" id="inativo" name="status" value="0">
                <label for="inativo">Inativo</label>
            </span>

            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
            <button type="button" onclick="window.location.href='../index.php'">Home</button>
        </form>
    </main>
</body>

</html>
