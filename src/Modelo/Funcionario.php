<?php

/* public permite que todos possam acessar o membro, inclusive fora da classe onde foi definido, através de uma instância.
protected permite que a classe atual e as classes filhas tenham acesso.
private permite que apenas a classe atual tenha acesso. */

namespace Alura\Banco\Modelo;

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