<?php

declare( strict_types = 1 );

class Caixa extends Funcionario{
    private int $numeroDoGuiche;

    public function __construct( string $nome, string $departamento  = 'NÃO DEFINIDO', float $salario = 1000.0, int $numeroDoGuiche = 0 )
    {
        parent::__construct($nome, $departamento, $salario);

        $this->numeroDoGuiche = $numeroDoGuiche;
    }

    public function setNumeroDoGuiche( $numeroDoGuiche ):void {
        $this->numeroDoGuiche = $numeroDoGuiche;
    }

    public function getNumeroDoGuiche():int {
        return $this->numeroDoGuiche;
    }

    public function getBonificacao(): float {
        return $this->salario += $this->salario * 0.15;
    }
}