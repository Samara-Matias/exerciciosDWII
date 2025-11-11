<?php

declare( strict_types = 1 );

namespace cefet\banco\modelo;

class Aluno extends Pessoa{
    private string $matricula;

    public function __construct( string $nome, string $cpf, string $telefone, string $matricula )
    {
        parent::__construct( $nome, $cpf, $telefone );
        $this->setMatricula( $matricula );
    }

    public function setMatricula( $matricula ):void{
        $this->matricula = $matricula;
    }

    public function getMatricula():string{
        return $this->matricula;
    }
}