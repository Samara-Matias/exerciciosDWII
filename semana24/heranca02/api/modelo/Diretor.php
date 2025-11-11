<?php

declare( strict_types = 1 );

class Diretor extends Gerente{

    public function __construct( string $nome, int $senha, string $departamento  = 'NÃO DEFINIDO', float $salario = 1000.0 )
    {
        parent::__construct($nome, $senha, $departamento, $salario);
    }

    public function getBonificacao(): float {
        return $this->salario += $this->salario * 0.50;
    }
}