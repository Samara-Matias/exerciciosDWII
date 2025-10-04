<?php

declare( strict_types = 1 );

require_once '../modelo/Filme.php';

$filme1 = new Filme();
$filme1->setTitulo( 'Interestelar' );
$filme1->setAnoDeLancamento( 2018 );
$filme1->incluirNoPlano();

$filme1->exibeFichaTecnica();

$filme1->avalia(9.7);
$filme1->avalia(8.3);
$filme1->avalia(11);
$filme1->avalia(8.5);

echo "Soma das avaliações: {$filme1->getSomaDasAvaliacoes()}<br/>";
echo "Total de avaliações: {$filme1->getTotalDeAvaliacoes()}<br/>";
echo "Avaliações pelos assinantes: {$filme1->obtemAvaliacao()}<br/>";

if( $filme1->isIncluidoNoPlano() )
	echo 'O filme pode ser assistido sem necessidade de alugar.<br/>';

echo '<br/>';

$filme2 = new Filme();
$filme2->setTitulo( 'Homens de Preto' );
$filme2->setAnoDeLancamento( 2002 );
$filme2->incluirNoPlano();

$filme2->exibeFichaTecnica();

$filme2->avalia(10);
$filme2->avalia(9.5);
$filme2->avalia(9);
$filme2->avalia(8.5);
echo '<br/>';

echo "Soma das avaliações: {$filme2->getSomaDasAvaliacoes()}<br/>";
echo "Total de avaliações: {$filme2->getTotalDeAvaliacoes()}<br/>";
echo "Avaliações pelos assinantes: {$filme2->obtemAvaliacao()}<br/>";

echo '<br/>';
var_dump($filme2);