<?php 
namespace Alura\DesignPatterns;

use DateTimeImmutable;
use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\GerarPedido;

class GerarPedidoHandler
{
    public function __construct()
    {
        
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
    }
}