<?php

class Funcionario extends Pessoa                                //Aqui se trata de uma herança. então extendemos a classe Pessoa.
{
    private string $cargo;

    public function __construct($nome, CPF $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}