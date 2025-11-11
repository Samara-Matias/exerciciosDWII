<?php

declare( strict_types = 1 );

namespace cefet\banco\modelo;

class Tesoureiro extends Funcionario{
    // Se o construtor da classe filha for igual ao da classe Pai, ele é herdado direto 
    public function getBonificacao(): float {
        return $this->salario += $this->salario * 0.20;
    }
}