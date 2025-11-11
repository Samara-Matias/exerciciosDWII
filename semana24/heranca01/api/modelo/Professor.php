<?php

declare( strict_types = 1 );
class Professor extends Pessoa {
    private float $horasDeAulaMes;
    private float $valorHoraAula;
    private float $salario = 0.0;

    public function __construct(string $nome, string $cpf, string $telefone, float $horasDeAulaMes, float $valorHoraAula) {
        parent::__construct($nome, $cpf, $telefone);
        $this->horasDeAulaMes = $horasDeAulaMes;
        $this->valorHoraAula = $valorHoraAula;
        $this->calcularSalario();
    }

    public function getHorasDeAulaMes(): float {
        return $this->horasDeAulaMes;
    }

    public function setHorasDeAulaMes(float $horasDeAulaMes): void {
        $this->horasDeAulaMes = $horasDeAulaMes;
        $this->calcularSalario();
    }

    public function getValorHoraAula(): float {
        return $this->valorHoraAula;
    }

    public function setValorHoraAula(float $valorHoraAula): void {
        $this->valorHoraAula = $valorHoraAula;
        $this->calcularSalario();
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function calcularSalario(): void {
        $this->salario = $this->horasDeAulaMes * $this->valorHoraAula;
    }
}