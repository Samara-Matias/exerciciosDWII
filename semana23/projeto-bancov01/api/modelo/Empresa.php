<?php

declare(strict_types=1);

require_once 'Funcionario.php';

class Empresa{
    private string $nome;
    private string $cnpj;
    private array $empregados;

    public function __construct(string $nome, string $cnpj)
    {
        if( !$this->setNome( $nome ) )
            die( 'Não foi possível cadastrar a empresa. O nome dela deve ter ao menos 4 caracteres!' );
        $this->setCNPJ( $cnpj );
        $this->empregados = array();
    }

    public function setNome( string $nome ):bool{
        if( strlen($nome) < 4 )
            return false;
        $this->nome = $nome;
        return true;
    }
    public function setCNPJ( string $cnpj ):void{
        $this->cnpj = $cnpj;
    }

    public function adicionaEmpregado( Funcionario $novoFuncionario ):void{
        array_push($this->empregados, $novoFuncionario);
    }

    public function getNome():string{
        return $this->nome;
    }

    public function getCNPJ():string{
        return $this->cnpj;
    }

    public function getEmpregados():array{
        return $this->empregados;
    }

    public function verificaArrayDeEmpregados(array $empregados):bool{
        foreach($empregados as $empregado){
            if( !($empregado instanceof Funcionario) )
                return false;
        }
        return true;
    }

    public function variosEmpregados(array $novosEmpregados):void{
        if( !($this->verificaArrayDeEmpregados( $novosEmpregados ) ) )
            die( 'Algum dos funcionários não é válido. Tente novamente' );
        $this->empregados = array_merge($this->empregados, $novosEmpregados);
    }

    public function fazParteDaEmpresa( Funcionario $empregado ):bool{
        return in_array($empregado, $this->empregados);
    }

    public function demitirEmpregado( Funcionario $empregado ):void{
        $index = array_search( $empregado, $this->empregados );
        if( !$index )
            return;
        unset( $this->empregados[$index] );
    }
}