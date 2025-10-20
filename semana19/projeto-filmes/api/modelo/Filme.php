<?php

class Filme{
	public string $titulo;
	public int $anoDeLancamento;
	public float $somaDasAvaliacoes = 0;
	public int $totalDeAvaliacoes = 0;
	public bool $incluidoNoPlano = false;

	public function exibeFichaTecnica():void{
		echo "Título: {$this->titulo}<br/>";
		echo "Ano de lançamento: {$this->anoDeLancamento}<br/>";
		$incluido = ( $this->incluidoNoPlano ? 'SIM' : 'NÃO');
		echo "Incluído no plano: {$incluido}<br/>";
	}

	public function avalia( float $nota ):void{
		if( $nota < 0 || $nota > 10 ){
			echo "A nota deve estar entre 0 e 10. <br/>";
			return;
		}
		$this->somaDasAvaliacoes += $nota;
		$this->totalDeAvaliacoes++;
	}

	public function obtemAvaliacao():float{
		return ( $this->somaDasAvaliacoes / $this->totalDeAvaliacoes );
	}

	public function incluirNoPlano():void{
		$this->incluidoNoPlano = true;
	}
	public function retirarDoPlano():void{
		$this->incluidoNoPlano = false;
	}
}