<?php

/* public permite que todos possam acessar o membro, inclusive fora da classe onde foi definido, através de uma instância.
protected permite que a classe atual e as classes filhas tenham acesso.
private permite que apenas a classe atual tenha acesso. */

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa                                //Aqui se trata de uma herança. então extendemos a classe Pessoa.
{
    private float $salario;

    public function __construct($nome, Cpf $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "O aumento deve ser positivo!";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float; //Todo funcionario terá essa implementação.
}