<?php
declare(strict_types=1);

class Pessoa {
    private string $nome;
    private int $idade;

    public function __construct( string $nome, int $idade ) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function setNome( string $nome ): void {
        $this->nome = $nome;
    }

    public function setIdade( int $idade ): void {
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function fazAniversario(): void {
        $this->idade++;
    }

    public function exibeDados(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade} anos<br><hr>";
    }
}