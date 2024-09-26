<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['nome']) && isset($_POST['data_nascimento'])) {
    $nome = htmlspecialchars($_POST['nome']);
    $data_nascimento = $_POST['data_nascimento'];
    
    $data_nasc = new DateTime($data_nascimento);
    $data_atual = new DateTime();
    $idade = $data_nasc->diff($data_atual);

    echo "<h1>Bem-vindo, $nome!</h1>";
    echo "<p>Você tem " . $idade->y . " anos";
} else {
    header("Location: index.php");
    exit();
}
?>

</body>
</html>
