<?php

declare(strict_types=1);

class Data {
    private string $dia;
    private string $mes;
    private string $ano;

    public function __construct( string $dia, string $mes, string $ano ) {
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
    }

    public function setDia(string $dia): void {
    	if( !( strlen($dia) == 2 ) )
    		return;
        $this->dia = $dia;
    }

    public function setMes(string $mes): void {
        if( !( strlen($mes) == 2 ) )
    		return;
    	$this->mes = $mes;
    }

    public function setAno(string $ano): void {
        if( !( strlen($ano) == 4 ) )
    		return;
    	$this->ano = $ano;
    }

    public function getDataBR(): string {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}
