<?php

declare( strict_types = 1 );

class Gerente extends Funcionario{
    private int $senha;

    public function __construct( string $nome, int $senha, string $departamento  = 'NÃO DEFINIDO', float $salario = 1000.0 )
    {
        parent::__construct($nome, $departamento, $salario);
        $this->setSenha( $senha );
    }

    public function autentica( int $senhaExterna ):bool{
        return ($this->senha === $senhaExterna);
    }

    public function setSenha( $senha ):void{
        $this->senha = $senha;
    }

    public function getSenha():int{
        return $this->senha;
    }
}