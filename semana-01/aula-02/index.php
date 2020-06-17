<?php

$_nome01 = 'string';
$valor_01 = 26;
$bool = true;
$bool2 = false;

//formas de declarar constantes:
/*
const NOME_CONSTANTE = 'Marcos Júnior';
define('NOME_COMPLETO','MARCOS JÚNIOR');

echo(NOME_COMPLETO).'<br>';
echo(NOME_CONSTANTE);
*/

//Declarar arrays:
/* 1 forma:
$jogos = array('Resident Evil', 'Super Mario', 'Far Cry 3');
*/
//2 forma:
$jogos = [
    'Resident Evil',
    'Super Mario',
    'Far Cry 3'
];
//echo $jogos[2] . '<br>' . $jogos[1] . '<br>' . $jogos[0];

//Arrays associativos

$dados = [
    'nome' => 'Marcos',
    'email' => 'fodao@gmail.com'
];

//Para transformar um array em json:
//echo json_encode($dados);

//echo $dados['nome'];

//Array dentro de array
$clientes = [
    ['Marcos', 'Rio de Jnaeiro'],
    ['Caio', 'São Paulo'],
    ['Lucio', 'Minas Gerais'],
];

//include(exibe o erro, mas não interrompe a aplicação) e require(exibe o erro e interrompe a aplicação):

require 'config.php';// _once não deixa repetir o erro, caso ja tenha sido utilizado.
require_once 'config.php';
 //faz com que apareça o erro somente uma vez.

//Foreach:
/*
foreach($clientes as $clientes)
    echo $clientes[0] . '<br>';


//For:
//count($clientes[0]) retorna a quantidade de elementos.

for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i][0] . '<br>';
}
*/

//Exibir arrays 
/*var_dump($clientes);
echo '<hr>';
dd($clientes);*/
function dd($p = [])
{

    echo '<pre>';
    print_r($p);
    echo '</pre>';
}

//Função
//echo valor(5);

function valor($val = 1)/* Se não assinar o valor, por padrão, será 1 */
{
    return $val * $val;
}

//If else

/* 
$idade = 18;
 
if($idade >= 18){
    echo 'Pode entrar ^^';
}elseif($idade<18 && $idade>=16){
    echo 'Pode entrar acompanhado de um adulto!';
}else{
    echo 'Não pode entrar :(';    
}


//Switch

define('PERIODO', 'TARDE');

switch (strtolower(PERIODO)) {
    case 'manha':
        echo 'Bom dia! :)';
        break;
    case 'tarde':
        echo 'Boa tarde! :)';
        break;
    case 'noite':
        echo 'Boa noite! :)';
        break;
    case 'madrugada':
        echo 'Boa madrugada dev!';
        break;
    default:
        echo 'Periodo não encontrado!';
}
*/

//