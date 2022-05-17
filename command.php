<?php

use Alura\DesignPatterns\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPatterns\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPatterns\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPatterns\GerarPedido;
use Alura\DesignPatterns\GerarPedidoHandler;
use Alura\DesignPatterns\Orcamento, Alura\DesignPatterns\Pedido;

require_once("vendor/autoload.php");

// argv = $parametros por linha de comando
// php command.php  1200.5 7 "Thomas Moraes"
$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

// $gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
// $gerarPedido->execute();

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);