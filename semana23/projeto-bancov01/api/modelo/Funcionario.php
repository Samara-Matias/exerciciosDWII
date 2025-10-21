<?php

declare(strict_types=1);

require_once __DIR__ . '/Data.php';

class Funcionario {
    private string $nome;
    private string $departamento;
    private float $salario;
    private bool $ativo;
    private Data $dataNascimento;

    public function __construct(string $nome, string $departamento, float $salario, Data $dataNascimento) {
        $this->nome = $nome;
        $this->departamento = $departamento;
        $this->salario = $salario;
        $this->ativo = true;
        $this->dataNascimento = $dataNascimento;
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
    	$this->salario = $salario; 
 	}

    public function isAtivo(): bool { 
    	return $this->ativo; 
    }

    public function getDataNascimento(): Data { 
    	return $this->dataNascimento; 
    }

    public function aumentaSalario(float $percentual): void {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public function demite(): void {
        $this->ativo = false;
    }

    public function readmite(): void {
        $this->ativo = true;
    }

    public function exibeDados(): void {
        echo "<br/>Nome: {$this->nome}<br>";
        echo "Departamento: {$this->departamento}<br>";
        echo "Salário: R$ " . $this->salario . "<br>";
        echo "Ativo: " . ($this->ativo ? 'Sim' : 'Não') . "<br>";
        echo "Data de Nascimento: " . $this->dataNascimento->getDataBR() . "<br>";
        echo "<hr>";
    }
}
