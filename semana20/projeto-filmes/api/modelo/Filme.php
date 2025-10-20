<?php

class Filme{
	private string $titulo;
	private int $anoDeLancamento;
	private float $somaDasAvaliacoes = 0;
	private int $totalDeAvaliacoes = 0;
	private bool $incluidoNoPlano = false;

	public function getTitulo():string{
		return $this->titulo;
	}
	public function setTitulo( string $titulo ):void{
		$this->titulo  = $titulo;
	}

	public function getAnoDeLancamento():int{
		return $this->anoDeLancamento;
	}
	public function setAnoDeLancamento( int $anoDeLancamento ){
		if( $anoDeLancamento < 1960 ){
			echo "Só trabalhamos com filmes a partir de 1960.";
			return;
		}
		$this->anoDeLancamento = $anoDeLancamento;
	}

	public function getSomaDasAvaliacoes():int{
		return $this->somaDasAvaliacoes;
	}
	public function getTotalDeAvaliacoes():int{
		return $this->totalDeAvaliacoes;
	}

	public function isIncluidoNoPlano():bool{
		return $this->incluidoNoPlano;
	}


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