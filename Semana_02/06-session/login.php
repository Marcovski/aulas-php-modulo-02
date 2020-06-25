<?php
session_start();
//12345
define('PASS','827ccb0eea8a706c4c34a16891f84e7b');
define('NAME','Marcos Júnior');

$senha = filter_input(INPUT_POST,'txtlogin',FILTER_SANITIZE_STRING);

if(PASS == md5($senha)){
    $_SESSION['logado'] = '1';
    setcookie('nome',NAME, time() +3600, '/');//nome recebe NAME e expira em 1 hora e a sessao vai ser gardada a partir do root 
    header('Location: painel.php');// envia o usuário para painel.php
}else{
    echo 'Acesso negado!';
}