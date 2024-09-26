<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Idade</title>
</head>
<body>
    <h1>Calcule sua Idade</h1>
    <form action="resultado.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
