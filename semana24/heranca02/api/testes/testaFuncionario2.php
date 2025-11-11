<?php

declare( strict_types = 1 );
require_once __DIR__ . '../../modelo/Funcionario.php';
require_once __DIR__ . '../../modelo/Gerente.php';
require_once __DIR__ . '../../modelo/Caixa.php';
require_once __DIR__ . '../../modelo/Tesoureiro.php';
require_once __DIR__ . '../../modelo/Diretor.php';

$f1 = new Funcionario( 'Mariana' );
$f1->setNome( 'Mariana da Silva' );
$f1->setDepartamento( 'Vendas' );
$f1->setSalario( 2000 );

$g1 = new Gerente('Ricardo', 123);
$g1->setDepartamento( 'Recursos Humanos' );
$g1->setSalario( 5000 );

$g2 = new Gerente('Paulo', 124);
$g2->setSalario( 5000 );

$t1 = new Tesoureiro('Fulano');
$t1->setSalario( 5000 );

$c1 = new Caixa( 'Pedro' );
$c1->setNumeroDoGuiche( 8 );
$c1->setSalario( 2000 );

$d1 = new Diretor( 'Beltrano', 123 );
$d1->setSalario( 8000 );


$f1->aumentaSalario( 20 );

echo 'Dados do funcionário 1:</br>';
echo "Nome: {$f1->getNome()}</br>";
echo "Departamento: {$f1->getDepartamento()}</br>";
echo "Salário: {$f1->getSalario()}</br>";
echo "Bonificação: R\${$f1->getBonificacao()}</br>";

echo '</hr>';

echo 'Dados do gerente 1:</br>';
echo "Bonificação: R\${$g1->getBonificacao()}</br>";
$g1->exibeDados();

echo 'Dados do gerente 2:</br>';
echo "Bonificação: R\${$g2->getBonificacao()}</br>";
$g2->exibeDados();

echo 'Dados do tesoureiro 1:</br>';
echo "Bonificação: R\${$t1->getBonificacao()}</br>";
$t1->exibeDados();

echo 'Dados do caixa 1:</br>';
echo "Bonificação: R\${$c1->getBonificacao()}</br>";
$c1->exibeDados();

echo 'Dados do diretor 1:</br>';
echo "Bonificação: R\${$d1->getBonificacao()}</br>";
$d1->exibeDados();