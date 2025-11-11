<?php 

declare( strict_types = 1 );
require_once( 'autoload.php' );

use cefet\banco\modelo\GerenciadorDeBonificacoes;
use cefet\banco\modelo\Funcionario;
use cefet\banco\modelo\Gerente;
use cefet\banco\modelo\Tesoureiro;

$gerenciador = new GerenciadorDeBonificacoes();

$f1 = new Funcionario( 'Mariana' );
$f1->setSalario(2000);

$g1 = new Gerente( 'Ricardo', 123 );
$g1->setSalario(5000);

$g2 = new Gerente( 'Paulo', 124 );
$g2->setSalario(5000);

$t1 = new Tesoureiro( 'Fulano' );
$t1->setSalario( 3000 );

// $gerenciador->somaBonificacao( $f1 );$gerenciador->somaBonificacao( $g1 );
$gerenciador->somaBonificacao( $g2 );
// $gerenciador->somaBonificacao( $t1 );

echo "Total em Bonificações: R\${$gerenciador->getTotalEmBonificacao()}";