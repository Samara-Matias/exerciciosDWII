<?php

class Cliente{
	private string $nome;
	private string $cpf;
	private string $email;

	public function __construct( $nome = ''){
		if( $nome != '' )
			$this->setNome( $nome );
	}
	public function __destruct(){
		echo "<br/>Objeto Cliente está sendo destruído...<br/>";
	}

	public function getNome():string{
		return $this->nome;
	}
	public function getCpf():string{
		return $this->cpf;
	}
	public function getEmail():string{
		return $this->email;
	}

	public function setNome( string $nome ):bool{
		if( strlen( $nome ) < 3 )
			return false;
		$this->nome = $nome;
		return true;
	}

	public function validaCpf( string $cpf ):bool{
		if( strlen($cpf) != 14 || $cpf[3] != '.' || $cpf[7] != '.' || $cpf[11] != '-' )
			return false;
		return true;
	}
	public function setCpf( string $cpf ):bool{
		if( !$this->validaCpf( $cpf ) )
			return false;	
		$this->cpf = $cpf;
		return true;
	}
	public function setEmail( string $email ):bool{
		if( !str_contains( $email, '@' ) || !str_contains( $email, '.' ) )
			return false;
		$this->email = $email;
		return true;
	}

	public function exibeDados(){
		$ul = '<ul>';
		$ul .= "<li><b>Nome: </b>{$this->getNome()}</li>";
		$ul .= "<li><b>CPF: </b>{$this->getCpf()}</li>";
		$ul .= "<li><b>Email: </b>{$this->getEmail()}</li>";
		$ul .= '</ul>';
		return $ul;
	}
}