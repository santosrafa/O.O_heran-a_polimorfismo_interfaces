<?php


class titular extends Pessoa                    //Aqui se trata de uma herança. então extendemos a classe Pessoa.
{
    private $endereco;

    public function __construct(Cpf $cpf,string $nome, Endereco $endereco)
    {
        $this ->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this ->nome = $nome;
        $this ->endereco = $endereco;

    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}

