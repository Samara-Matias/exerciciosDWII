<?php

declare( strict_types = 1 );

require_once '../modelo/Conta.php';

$conta1 = new Conta();
$conta1->titular = "Fulano";
$conta1->numero = 123;
$conta1->deposita( 3000 );

$conta2 = new Conta();
$conta2->titular = "Beltrano";
$conta2->numero = 456;
$conta2->deposita( 4000 );

$conta3 = new Conta();
$conta3->titular = "Ciclano";
$conta3->numero = 789;
$conta3->deposita( 2500 );

if( !$conta1->saca( 3001 ) )
	echo "Saldo insuficiente. Saldo atual: R\${$conta1->saldo}<br/>";
else
	echo "Saldo efetuado com sucesso!<br/>";

$conta1->transferePara( $conta3, 1500 );

echo 'Conta1: <br/>';
echo "Número: {$conta1->numero}<br/>";
echo "Titular: {$conta1->titular}<br/>";
echo "Saldo: R\${$conta1->saldo}<br/>";
echo '<br/>';

echo 'Conta2: <br/>';
echo "Número: {$conta2->numero}<br/>";
echo "Titular: {$conta2->titular}<br/>";
echo "Saldo: R\${$conta2->saldo}<br/>";
echo '<br/>';

echo 'Conta3: <br/>';
echo "Número: {$conta3->numero}<br/>";
echo "Titular: {$conta3->titular}<br/>";
echo "Saldo: R\${$conta3->saldo}<br/>";
echo '<br/>';