<?php 
namespace Alura\DesignPatterns;

use DateTimeImmutable;
use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\Command;
use Alura\DesignPatterns\Orcamento;

class GerarPedido
{
    private $valorOrcamento;
    private $numeroItens;
    private $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function getNumeroItens()
    {
        return $this->numeroItens;
    }

    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }
}