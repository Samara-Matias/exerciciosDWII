<?php

declare( strict_types = 1 );

namespace cefet\banco\modelo;

class ContaCorrente extends Conta {

    public function __construct(int $numero, string $nomeDoTitular = "") {
        parent::__construct($numero, $nomeDoTitular);
    }

    public function atualiza(float $taxa): void {
        $this->saldo -= ($taxa * 2);
    }
}