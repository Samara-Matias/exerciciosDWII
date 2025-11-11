<?php

declare(strict_types=1);

namespace cefet\banco\modelo;

class Conta {
    protected int $numero = 0;
    protected string $nomeDoTitular = '';
    protected float $saldo = 0;

    public function __construct(int $numero, string $nomeDoTitular = "") {
        if ($numero <= 0) {
            die("Número da conta deve ser positivo.");
        }
        $this->numero = $numero;
        if( $nomeDoTitular != '' )
        	$this->setNomeDoTitular( $nomeDoTitular );
    }

    
    public function getNumero(): int {
        return $this->numero;
    }

    public function getNomeDoTitular(): string {
        return $this->nomeDoTitular;
    }

    public function setNomeDoTitular(string $nomeDoTitular): void {
        $this->nomeDoTitular = $nomeDoTitular;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function saca(float $valor): bool {
        if ($valor <= 0 || $valor > $this->saldo)
            return false;
        $this->saldo -= $valor;
        return true;
    }

    public function deposita(float $valor): bool {
        if ($valor <= 0)
            return false;
        $this->saldo += $valor;
        return true;
    }

    public function transferePara(Conta $contaDestino, float $valor): bool {
        if ($this->saca($valor)) {
            return $contaDestino->deposita($valor);
        }
        return false;
    }

    public function atualiza(float $taxa): void {
        $this->saldo -= $taxa;
    }

    // EXIBE DADOS
    public function exibeDados(): void {
        echo "<ul>";
        echo "<li><b>Número da Conta:</b> {$this->numero}</li>";
        echo "<li><b>Nome do Titular:</b> {$this->nomeDoTitular}</li>";
        echo "<li><b>Saldo:</b> R$ {$this->saldo}</li>";
        echo "</ul><hr>";
    }
}