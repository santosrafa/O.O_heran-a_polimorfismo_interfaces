<?php

namespace Alura\Banco\Modelo\Conta\Titular;

require_once 'Modelo/Conta/conta.php';
require_once 'Modelo/Endereco.php';
require_once 'Modelo/Pessoa.php';
require_once 'Modelo/Conta/Titular.php';
require_once 'Modelo/cpf.php';

use Alura\Banco\Modelo\Conta\titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Goiania', 'Vera Cruz', 'Minha Rua', '10C');
$rafael = new titular(new Cpf('123.456.789-10'), 'Rafael Teles', $endereco);
$primeiraConta = new Conta($rafael);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;          //Chamando o metodo recuperar saldo.
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();