<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;                  //Use está classe pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class titular extends Pessoa implements Autenticavel                    //Aqui se trata de uma herança. então extendemos a classe Pessoa.
{
    private $endereco;

    public function __construct(Cpf $cpf,string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);     //parent:: Significa que estou chamando classe mãe.
        $this ->endereco = $endereco;

    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}

