<?php

namespace Modelo\Conta;


class titular extends Pessoa                    //Aqui se trata de uma herança. então extendemos a classe Pessoa.
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
}

