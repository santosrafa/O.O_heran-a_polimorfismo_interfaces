<?php

namespace Alura\Banco\Modelo;

final class Cpf                                     //Se eu digo que uma classe é final eu impesso a herança dela. Assim não é possível mais extende-la
{
    private  $cpf;

    public function __construct(string $cpf)
    {
        $this ->cpf = $cpf;
    }

    public function recuperaNumero(): string
    {
        return $this->cpf;
    }
}