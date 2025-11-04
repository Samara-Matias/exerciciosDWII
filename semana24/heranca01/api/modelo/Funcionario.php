<?php

declare(strict_types=1);

class Funcionario{
    protected string $nome, $departamento;
    protected float $salario;

    public function __construct( string $nome, string $departamento = 'NÃO DEFINIDO', float $salario = 1000.0 ) {
        $this->setNome( $nome );
        if( isset( $departamento ) && $departamento !== '' )
            $this->setDepartamento( $departamento );
        $this->setSalario( $salario );
    }

    public function getNome(): string {
    	return $this->nome;
    }

    public function setNome(string $nome): void { 
    	$this->nome = $nome; 
    }

    public function getDepartamento(): string {
    	return $this->departamento; 
    }

    public function setDepartamento(string $departamento): void { 
    	$this->departamento = $departamento; 
    }

    public function getSalario(): float { 
    	return $this->salario;
    }

    public function setSalario(float $salario): void {
        if( $salario > 0.0 )
    	    $this->salario = $salario;
 	}
    
    public function aumentaSalario(float $percentualDeAumento): void {
        if( $percentualDeAumento > 0 && $percentualDeAumento <= 100 )
            $this->salario += $this->salario * ($percentualDeAumento / 100);
    }

    public function getBonificacao(): float {
        return $this->salario += $this->salario * 0.10;
    }


    public function exibeDados(): void {
        echo "<br/>Nome: {$this->nome}<br/>";
        echo "Departamento: {$this->departamento}<br/>";
        echo "Salário: R$ " . $this->salario . "<br/>";
        echo "<hr>";
    }
}