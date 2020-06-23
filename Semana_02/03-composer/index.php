<?php

require_once('vendor/autoload.php');

use App\Controller; 

$controller = new Controller();

$dados=[
    'nome'=>'Marcos Rodrigues',
    'idade'=> '18 anos',

];

$controller ->view('contato/teste.php', $dados);//chama funçao da classe Controller