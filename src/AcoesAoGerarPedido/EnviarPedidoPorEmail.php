<?php 
namespace Alura\DesignPatterns\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\AcoesAoGerarPedido\AcaoAposGerarPedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado";
    }
}