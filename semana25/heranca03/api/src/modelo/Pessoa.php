<?php

declare(strict_types=1);

namespace cefet\banco\modelo;

class Pessoa {
    protected string $nome;
    protected string $cpf;
    protected string $telefone;

    public function __construct( string $nome, string $cpf, string $telefone ) {
        $this->nome = $nome;   
        $this->telefone = $telefone;
        if( $this->setCpf( $cpf ) )
            $this->cpf = $cpf;
    }

    public function setNome( string $nome ): void {
        $this->nome = $nome;
    }
    
    public function getNome(): string {
        return $this->nome;
    }

    public function validaCpf( string $cpf ):bool{
		if( strlen($cpf) != 14 || $cpf[3] != '.' || $cpf[7] != '.' || $cpf[11] != '-' )
			return false;
		return true;
	}
	public function setCpf( string $cpf ):bool{
		if( !$this->validaCpf( $cpf ) )
			return false;	
		$this->cpf = $cpf;
		return true;
	}


    public function exibeDados(): void {
        echo "Nome: {$this->nome}<br>";
        echo "CPF: {$this->cpf}<br><hr>";
    }
}