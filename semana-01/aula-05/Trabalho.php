<?php

class Trabalho{
    private $nome;

    protected function setNome($nome){ //Protected só permite interaçao com classes estendidas
        return $this->nome = $nome;
    }

    protected function getNome(){
        return $this->nome;
    }

    protected function padronizaNome(){
        return strtoupper(str_replace(' ','-',$this->getNome()));// retorne tudo na maiuscula(substitua(todos os espaços, por -, na string $nome))
    }
}