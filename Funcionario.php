<?php

class Funcionario extends Pessoa                                //Aqui se trata de uma herança. então extendemos a classe Pessoa.
{
    private string $cargo;

    public function __construct($nome, CPF $cpf, $cargo)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}