<?php 
namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\Descontos\SemDesconto;
use Alura\DesignPatterns\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPatterns\Descontos\DescontoMaisde500Reais;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(new DescontoMaisde500Reais(new SemDesconto()));

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}