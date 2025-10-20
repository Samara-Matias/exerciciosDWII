<?php

declare( strict_types = 1 );

require_once '../modelo/Conta.php';

$conta1 = new Conta();
$conta1->setTitular( "Fulano" );
$conta1->setNumero( 123 );
$conta1->deposita( 3000 );

$conta2 = new Conta();
$conta2->setTitular( "Beltrano" );
$conta2->setNumero( 456 );
$conta2->deposita( 4000 );

$conta3 = new Conta();
$conta3->setTitular( "Ciclano" );
$conta3->setNumero( 789 );
$conta3->deposita( 2500 );

if( !$conta1->saca( 3001 ) )
	echo "Saldo insuficiente. Saldo atual: R\${$conta1->getSaldo()}<br/>";
else
	echo "Saldo efetuado com sucesso!<br/>";

$conta1->transferePara( $conta3, 1500 );

// $conta1->saldo = 8000;

echo 'Conta1: <br/>';
echo "Número: {$conta1->getNumero()}<br/>";
echo "Titular: {$conta1->getTitular()}<br/>";
echo "Saldo: R\${$conta1->getSaldo()}<br/>";
echo '<br/>';

echo 'Conta2: <br/>';
echo "Número: {$conta2->getNumero()}<br/>";
echo "Titular: {$conta2->getTitular()}<br/>";
echo "Saldo: R\${$conta2->getSaldo()}<br/>";
echo '<br/>';

echo 'Conta3: <br/>';
echo "Número: {$conta3->getNumero()}<br/>";
echo "Titular: {$conta3->getTitular()}<br/>";
echo "Saldo: R\${$conta3->getSaldo()}<br/>";
echo '<br/>';