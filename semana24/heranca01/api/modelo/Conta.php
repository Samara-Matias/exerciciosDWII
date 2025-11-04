<?php

declare(strict_types=1);

class Conta{
	private int $numero = 0;
	private Cliente $titular;
	private float $saldo = 0;

	public function __construct( int $numero, Cliente $cliente ){
		if( !( $numero > 0) )
			return;
		$this->numero = $numero;
		$this->titular = $cliente;
	}

	// Métodos acessores
	/**
	 * @return int $numero
	 * */
	public function getNumero():int{
		return $this->numero;
	}

	public function getTitular():Cliente{
		return $this->titular;
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
		$ul = '<ul>';
		$ul .= "<li><b>Número da conta: </b>{$this->getNumero()}</li>";
		$ul .= "<li><b>Informações do titular da conta: </b>{$this->getTitular()->exibeDados()}</li>";
		$ul .= "<li><b>Saldo da conta: </b>{$this->getSaldo()}</li>";
		$ul .= '</ul>';
		echo $ul;
	}
}