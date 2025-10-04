<?php

class Conta{
	public int $numero;
	public string $titular;
	private float $saldo = 0;

	// Métodos acessores
	/**
	 * @return int $numero
	 * */
	public function getNumero():int{
		return $this->numero;
	}
	/**
	 * @param int $numero
	 * @return void
	 * */
	public function setNumero( int $numero ):void{
		if ( !$numero > 0 )
			return;
		$this->numero = $numero;
	}

	public function getTitular():string{
		return $this->titular;
	}
	public function setTitular( string $titular ):void{
		if ( strlen( $titular ) < 3 )
			return;
		$this->titular = $titular;
	}

	public function getSaldo():float{
		return $this->saldo;
	}


	public function saca( float $valor ):bool{
		if( $valor <= 0 || $valor > $this->saldo )
			return false;
		$this->saldo -= $valor;
		return true;
	}

	public function deposita( float $valor ):bool{
		if( $valor <= 0 )
			return false;
		$this->saldo += $valor;
		return true;
	}

	public function transferePara(Conta $contaDestino, float $valor):bool{
		if( $this->saca($valor) )
			return $contaDestino->deposita($valor);
		return false;
	}

	public function exibeDados():void{
		echo "Número: {$this->numero}<br/>";
		echo "Titular: {$this->titular}<br/>";
		echo "Saldo: {$this->saldo}<br/>";
	}
}