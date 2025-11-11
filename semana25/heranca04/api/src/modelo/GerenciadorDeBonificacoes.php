<?php

namespace cefet\banco\modelo;

class GerenciadorDeBonificacoes{
    private float $totalEmBonificacoes = 0.0; // Não tem set

    public function somaBonificacao(Gerente $f){
        $this->totalEmBonificacoes += $f->getBonificacao();
    }

    public function getTotalEmBonificacao():float{
        return $this->totalEmBonificacoes;
    }
}