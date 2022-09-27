<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'Vera Cruz', 'Minha rua', '50');

$outroEndereco = new Endereco('Goiania', 'Santana', 'Minha rua', '22');


echo $umEndereco . PHP_EOL;
echo $outroEndereco;