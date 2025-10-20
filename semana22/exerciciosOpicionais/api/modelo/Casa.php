<?php
declare(strict_types=1);

require_once __DIR__ . '/Pessoa.php';
require_once __DIR__ . '/Porta.php';

class Casa {
    private string $cor;
    private Porta $porta1;
    private Porta $porta2;
    private Pessoa $proprietario;

    public function __construct(string $cor, Pessoa $proprietario, Porta $porta1, Porta $porta2) {
        $this->cor = $cor;
        $this->proprietario = $proprietario;
        $this->porta1 = $porta1;
        $this->porta2 = $porta2;
    }

    public function pinta(string $cor): void {
        $this->cor = $cor;
    }

    public function quantasPortasEstaoAbertas(): int {
        $abertas = 0;
        if ($this->porta1->estaAberta()) $abertas++;
        if ($this->porta2->estaAberta()) $abertas++;
        return $abertas;
    }

    public function exibeDados(): void {
        echo "<h3>🏠 Dados da Casa:</h3>";
        echo "Cor da casa: {$this->cor}<br>";
        echo "Proprietário: {$this->proprietario->getNome()} ({$this->proprietario->getIdade()} anos)<br>";
        echo "Portas abertas: {$this->quantasPortasEstaoAbertas()}<br><hr>";

        echo "<strong>Porta 1:</strong><br>";
        $this->porta1->exibeDados();

        echo "<strong>Porta 2:</strong><br>";
        $this->porta2->exibeDados();
    }
}