<?php


    $cidades= [
        'São Gonçalo',
        'Rio de Janeiro',
        'Niterói',
        'Iepê',
        'Balaur',
    ];

    $dado = ler();

    var_dump($dado[1]);

    //escrever($dado);

function escrever($cidades){

    $fp=fopen('teste.txt','w');

    fwrite($fp,json_encode($cidades));

    fclose($fp);
    
}

function ler(){
    $file ='teste.txt';
    $fp = fopen($file,'r');
    
    $conteudo = fread($fp,filesize($file));

    fclose($fp);

    return json_decode($conteudo);
}
