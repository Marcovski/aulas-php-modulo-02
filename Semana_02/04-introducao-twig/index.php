<?php

require_once('vendor/autoload.php');//composer pede esse import

define('VAR_NAME','Marcos');

use app\controller\Controller;


new Controller('teste', [
    'nome'=> 'Célia',
    'idade'=>19,
    'cidades'=>[
        'São Gonçalo',
        'Rio de Janeiro',
        'Niterói',
        'Iepê',
        'Balaur',
    ],
    'mensagem' => 'O rato entrou no cu de Messias.',
    'data' => date('Y-m-d H:m:s')//Formato de data padrao Americano
]);

?>