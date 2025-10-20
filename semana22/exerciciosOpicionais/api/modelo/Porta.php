<?php
declare(strict_types=1);

class Porta {
    private bool $aberta;
    private string $cor;
    private float $largura;
    private float $altura;

    public function __construct(string $cor, float $largura, float $altura) {
        $this->aberta = false;
        $this->cor = $cor;
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function setLargura( float $largura ):void{
    	$this->largura = $largura;
    }

    public function setAltura( float $altura ):void{
    	$this->altura = $altura;
    }

    public function getCor():string{
    	return $this->cor;
    }

    public function getLargura():float{
    	return $this->largura;
    }

    public function getAltura():float{
    	return $this->altura;
    }

    public function abre(): void {
        $this->aberta = true;
    }

    public function fecha(): void {
        $this->aberta = false;
    }

    public function pinta(string $cor): void {
        $this->cor = $cor;
    }

    public function estaAberta(): bool {
        return $this->aberta;
    }

    public function exibeDados(): void {
        echo "Cor: {$this->cor}<br>";
        echo "Largura: {$this->largura}m<br>";
        echo "Altura: {$this->altura}m<br>";
        echo "Aberta: " . ($this->estaAberta() ? "Sim" : "Não") . "<br><hr>";
    }
}
