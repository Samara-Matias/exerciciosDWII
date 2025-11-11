<?php

namespace cefet\banco\modelo;

class ProfessorMestre extends Professor {
    private string $temaDaDissertacao;

    public function __construct(
        string $nome,
        string $cpf,
        string $telefone,
        float $horasDeAulaMes,
        float $valorHoraAula,
        string $temaDaDissertacao
    ) {
        parent::__construct($nome, $cpf, $telefone, $horasDeAulaMes, $valorHoraAula);
        $this->temaDaDissertacao = $temaDaDissertacao;
    }

    public function getTemaDaDissertacao(): string {
        return $this->temaDaDissertacao;
    }

    public function setTemaDaDissertacao(string $temaDaDissertacao): void {
        $this->temaDaDissertacao = $temaDaDissertacao;
    }

    public function calcularSalario(): void {
        $this->salario = $this->horasDeAulaMes * ($this->valorHoraAula * 1.20);
    }

    public function exibeDados(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Tema da dissertação: {$this->temaDaDissertacao}<br><hr>";
    }
}