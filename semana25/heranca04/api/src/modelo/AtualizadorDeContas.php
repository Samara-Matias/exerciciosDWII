<?php 

namespace cefet\banco\modelo;

class AtualizadorDeContas{
    private float $taxaDeAtualizaca;
    private float $saldoTotalDasContasAtualizacao = 0.0;

    public function __construct( float $taxaDeAtualizacao ){
            $this->taxaDeAtualizaca = $taxaDeAtualizacao;
    }

    public function atualizaConta( Conta $c ):void{
        echo "<hr/>Saldo antes de atualizar: R\${$c->getSaldo()}<br/>";
        echo "Atualizando a conta nº {$c->getNumero()}...<br/>";
        $c->atualiza( $this->taxaDeAtualizaca );
        
        echo "<hr/>Saldo depois de atualizar: R\${$c->getSaldo()}<br/>";

        $this->saldoTotalDasContasAtualizacao += $c->getSaldo();
    }

    public function getSaldoTotalDasContasAtualizadas():float{
        return $this->saldoTotalDasContasAtualizacao;
    }
}