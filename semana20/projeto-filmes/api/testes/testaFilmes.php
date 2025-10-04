<?php

declare( strict_types = 1 );

require_once '../modelo/Filme.php';

$filme1 = new Filme();
$filme1->titulo = 'Interestelar';
$filme1->anoDeLancamento= 2018;
$filme1->incluirNoPlano();

$filme1->exibeFichaTecnica();

$filme1->avalia(9.7);
$filme1->avalia(8.3);
$filme1->avalia(11);
$filme1->avalia(8.5);

echo "Soma das avaliações: {$filme1->somaDasAvaliacoes}<br/>";
echo "Total de avaliações: {$filme1->totalDeAvaliacoes}<br/>";
echo "Avaliações pelos assinantes: {$filme1->obtemAvaliacao()}<br/>";

echo '<br/>';
var_dump($filme1);

echo '<br/>';

$filme2 = new Filme();
$filme2->titulo = 'Homens de Preto';
$filme2->anoDeLancamento= 2002;
$filme2->incluirNoPlano();

$filme2->exibeFichaTecnica();

$filme2->avalia(10);
$filme2->avalia(9.5);
$filme2->avalia(9);
$filme2->avalia(8.5);
echo '<br/>';

echo "Soma das avaliações: {$filme2->somaDasAvaliacoes}<br/>";
echo "Total de avaliações: {$filme2->totalDeAvaliacoes}<br/>";
echo "Avaliações pelos assinantes: {$filme2->obtemAvaliacao()}<br/>";

echo '<br/>';
var_dump($filme2);