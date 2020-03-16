<?php
if (!isset($_SESSION)) {
    session_start();
}
$nome = $_SESSION['nome'] ?? 'Guest';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php
if (isset($_SESSION['id'])) {
    echo 'Bem vindo ' . $nome . '<br>';
} else {
    echo 'Bem vindo ' . $nome . '<br>';
}
?>
    </h2>
    <h3><a href="../index.php">Sair</a> </h3>
</body>
</html>