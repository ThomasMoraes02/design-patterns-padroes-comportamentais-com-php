<?php 
namespace Alura\DesignPatterns\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\AcoesAoGerarPedido\AcaoAposGerarPedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}