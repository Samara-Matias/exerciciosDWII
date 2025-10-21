<?php
declare(strict_types=1);

require_once __DIR__ . '/Pessoa.php';
require_once __DIR__ . '/Porta.php';

class Casa {
    private string $cor;
    private array $portas;
    private int $totalDePortas;

    public function __construct(string $cor, array $portas) {
        $this->cor = $cor;
        $this->portas = $portas;
    }

    public function pinta(string $cor): void {
        $this->cor = $cor;
    }

    public function quantasPortasEstaoAbertas(): int {
        $abertas = 0;
        foreach($this->portas as $porta){
            $abertas++;
        }
        return $abertas;
    }

    public function exibeDados(): void {
        echo "<h3>🏠 Dados da Casa:</h3>";
        echo "Cor da casa: {$this->cor}<br>";
        echo "Portas abertas: {$this->quantasPortasEstaoAbertas()}<br><hr>";

        echo "<strong>Portas:</strong><br>";

        foreach($this->portas as $porta){
            $porta->exibeDados();
        }
    }
}