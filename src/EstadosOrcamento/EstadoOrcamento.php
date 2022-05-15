<?php 
namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;
use DomainException;

abstract class EstadosOrcamento
{
    /**
     * Undocumented function
     *
     * @param Orcamento $orcamento
     * @return float
     * @throws DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser aprovado");
    }

    public function reprovado(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser reprovado");
    }

    public function finalizado(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser finalizado");
    }
}