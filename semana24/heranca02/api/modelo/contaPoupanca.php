<?php

declare( strict_types = 1 );

class ContaPoupanca extends Conta {

    public function __construct(int $numero, string $nomeDoTitular = "") {
        parent::__construct($numero, $nomeDoTitular);
    }

    public function atualizaSaldo(float $taxa): void {
        $this->saldo -= ($taxa * 3);
    }
}