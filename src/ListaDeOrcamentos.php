<?php 
namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Orcamento;
use ArrayIterator;
use Iterator;
use IteratorAggregate;

class ListaDeOrcamentos implements IteratorAggregate
{
    private $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    // public function orcamentos(): array
    // {
    //     return $this->orcamentos;
    // }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos); 
    }
}