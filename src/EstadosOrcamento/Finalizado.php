<?php 
namespace Alura\DesignPatterns\EstadosOrcamento;

use DomainException;
use Alura\DesignPatterns\Orcamento;

class Finalizado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException("Um orçamento finalizado não pode receber desconto");
    }
}