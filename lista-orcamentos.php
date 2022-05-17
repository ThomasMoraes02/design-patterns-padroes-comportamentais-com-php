<?php 

require_once("vendor/autoload.php");

use Alura\DesignPatterns\ListaDeOrcamentos;
use Alura\DesignPatterns\Orcamento;

$listaOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->valor = 1500;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 1;
$orcamento2->valor = 500;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 2;
$orcamento3->valor = 15;

// $listaOrcamentos = [
//     $orcamento1, $orcamento2, $orcamento3
// ];

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
}