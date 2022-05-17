<?php 
namespace Alura\DesignPatterns;

use Alura\DesignPatterns\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPatterns\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPatterns\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPatterns\AcoesAoGerarPedido\LogGerarPedido;
use DateTimeImmutable;
use Alura\DesignPatterns\Pedido;
use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\GerarPedido;

class GerarPedidoHandler
{
    private $acoesAposGerarPedido;

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

        // $pedidosRepository = new CriarPedidoNoBanco();
        // $logGerarPedido = new LogGerarPedido();
        // $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }

        echo "Cria pedido no banco de dados" . PHP_EOL;
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }
}