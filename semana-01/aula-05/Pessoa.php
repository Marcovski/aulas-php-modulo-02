<?php

require_once('Trabalho.php');

class Pessoa extends Trabalho //estende todos os metodos e var da classe Trabalho, exeto os tipps private
{
    private $salario;

    public function __construct()
    {
        $this->salario = 1500;
    }
    public function calculaalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }

    public function setSalario($salario){
        return $this->salario = $salario;
    }

    public function getSalario(){
    return $this->salario; 
    }

    public function obeterDados(string $nome){
        $this->setNome($nome);
        return $this->padronizaNome();
    }
}
