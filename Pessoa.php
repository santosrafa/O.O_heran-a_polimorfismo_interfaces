<?php

class Pessoa
{
    protected string $nome;             //protect :: Eu consigo acessar ele dentro da classe pessoa e nas classes filhas.
    private  $cpf;

    public function __construct($nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
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

    protected function validaNomeTitular(string $nomeTitular)                         //Metodo valida nome.
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter no minimo 5 caracteres";
            exit();
        }
    }
}