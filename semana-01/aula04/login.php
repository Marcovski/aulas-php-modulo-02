<?php

$array = [];

    parse_str($_SERVER['QUERY_STRING'] , $array);//converteu uma string em array

dd($array['senha']);
dd(http_build_query($array));//converteu o array em string dnv

die();

//dd($_POST);//POST é um array global que devolve as info que foram enviadas no metodo do cabeçalho do tipo post

//isset: ferifica se existe uma variavel,indice ou qlqr coisa.
if(isset($_POST['login']))
    echo $_POST['login'];//Por ser um array, podemos chamar os indices

//?login=sadsa&senha=asdsad&btnlogin=Enviar
//echo $_GET['login'];

$login=filter_input(INPUT_GET, 'login', FILTER_SANITIZE_NUMBER_INT);//FILTRA O VALOR PARA RECEBER UM NUMERO INT, SEJA VALIDO OU NAO
$senha=filter_var($_POST['senha'], FILTER_SANITIZE_STRING);

function dd($p){
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}
