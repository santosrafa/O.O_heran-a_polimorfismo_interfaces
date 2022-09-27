<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};


$umFuncionario = new Desenvolvedor(
    'Rafael Teles', 
    new CPF('123.546.789-20'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Maria', 
    new CPF('123.546.789-50'),
    3000
);    

$umDiretor = new Diretor(
    'Paulo Azevedo', 
    new CPF('123.546.789-11'),
    5000
);    

$umEditor = new EditorVideo(
    'Paulo Marcelo',
    new CPF('545.987.321-98'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();

