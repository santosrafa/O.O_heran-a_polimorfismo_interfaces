<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
    'Rafael Teles', 
    new CPF('123.546.789-20'),
     'Desenvolvedor',
      1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Maria', 
    new CPF('123.546.789-50'),
    'Gerente',
    3000
);    

$umDiretor = new Diretor(
    'Paulo Azevedo', 
    new CPF('123.546.789-11'),
    'Diretor',
    5000
);    

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();

