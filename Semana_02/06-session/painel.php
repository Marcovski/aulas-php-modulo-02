<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != 1){
    header('Location: negado.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel admin</title>
</head>
<body>
    <h1>Olá, <?=$_COOKIE['nome'] ?? 'Desconhecido';?></h1><!--Chama nome, caso n encontre escreve "Desconhecido"--> 
    <a href="logout.php">Sair</a>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius, excepturi nulla sunt voluptatibus deleniti accusamus deserunt, qui vel quos tempore vero soluta nisi velit veritatis blanditiis fugiat consequatur veniam.</p>
    
</body>
</html>