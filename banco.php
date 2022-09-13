<?php

namespace Modelo;

require_once 'conta.php';
require_once 'Endereco.php';
require_once 'Titular.php';
require_once 'cpf.php';

$endereco = new Endereco('Goiania', 'Vera Cruz', 'Minha Rua', '10C');
$rafael = new titular(new Cpf('123.456.789-10'), 'Rafael Teles', $endereco);
$primeiraConta = new Conta($rafael);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;          //Chamando o metodo recuperar saldo.
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();