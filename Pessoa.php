<?php

class Pessoa
{
    public string $nome;
    public  $cpf;

    public function __construct($nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function validaNomeTitular(string $nomeTitular)                         //Metodo valida nome.
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter no minimo 5 caracteres";
            exit();
        }
    }
}