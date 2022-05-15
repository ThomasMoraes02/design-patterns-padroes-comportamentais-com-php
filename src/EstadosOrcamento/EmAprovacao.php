<?php 
namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\EstadosOrcamento\Aprovado;

class EmAprovacao
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        if($this->estadoAtual == "EM_APROVACAO") {
            return $this->valor * 0.05;
        }
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}