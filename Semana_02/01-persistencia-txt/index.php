<?php

//nome do arq com a extensao
$filename = 'academy-satellasoft.txt';

//verifica se o diretorio existe
if(!is_dir('dados')){
    mkdir('dados');//cria um diretorio caso n exista
}

escrever($filename);

ler($filename);

function escrever($filename)
{

//dica exercicio
$dados= [
    'nome' => 'Marcos Rodrigues',
    'email'=> 'amsaisin@afas.com'
];
$text= json_encode($dados);//converte o array em json

//$text='Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.';

//Abriu para escrita
$fp = fopen('dados/'.$filename, 'w');

//Escreve no arquivo 
fwrite($fp,$text);


//Fecha o arquivo

fclose($fp);
}

function ler($filename){
    $path = 'dados/'.$filename;

    if(!file_exists($path)){//Se o arquivo não existir, kika 
      return;}

    //Abre o arq para leitura
    $fp = fopen($path, 'r');

    //Lê todos os bytes do arquivo 
    $conteudo = fread($fp, filesize($path));//fread=ler; filesize verifica a qntdd de bytes do arq

    //Fecha o arquivo
    fclose($fp);

    //dica exercicio
    $arr = json_decode($conteudo);
    print_r($arr->nome);
//    echo $conteudo;
}