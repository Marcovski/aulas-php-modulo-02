<?php
require_once ('pessoa.php');//importar

$pessoa = new Pessoa();

//echo $pessoa->calculaalario(500);

$pessoa->setSalario(700);
//echo $pessoa->getSalario();

echo $pessoa->obeterDados('Marcos Juniro Rodrigues');