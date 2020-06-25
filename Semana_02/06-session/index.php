<?php
session_start();
if(isset($_SESSION['logado']) && $_SESSION['logado'] == 1){
    header('Location: painel.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="login.php" method="post">
        <input type="password" name="txtlogin">
        <br>
        <input type="submit">
    </form>


</body>
</html>