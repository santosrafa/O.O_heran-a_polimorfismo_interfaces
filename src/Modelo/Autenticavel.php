<?php

namespace Alura\Banco\Modelo;

interface Autenticavel                                          //Uma interface é basicamente uma classe abstrata com todos os seus metodos abstratos.
{
    public function podeAutenticar(string $senha): bool;
}
