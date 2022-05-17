<?php 
namespace Alura\DesignPatterns\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\AcoesAoGerarPedido\AcaoAposGerarPedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}