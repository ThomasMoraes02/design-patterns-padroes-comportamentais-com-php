<?php

use Alura\DesignPatterns\CalculadoraDeDescontos;
use Alura\DesignPatterns\Orcamento;

require_once("vendor/autoload.php");

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento);