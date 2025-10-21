<?php

require_once '../modelo/Empresa.php';
require_once '../modelo/Data.php';

$empresa = new Empresa( 'Bauduco', '89.121.030/0001-60' );

$data1 = new Data("15", "03", "1995");
$func1 = new Funcionario("Ana Fulana", "TI", 15500.00, $data1);
$func2 = new Funcionario("Carlos Ciclano", "TI", 6000.00, new Data( "28", "10", "1988" ) );
$func3 = new Funcionario("Xablau", "TI", 6000.00, new Data( "08", "05", "1999" ) );

$funcionarios = array(
    new Funcionario('Fulano', 'Finanças', 3000.00, new Data( "08", "07", "1988" )),
    new Funcionario('Beltrano', 'RH', 3000.00, new Data( "11", "11", "1998" ))
);

$empresa->adicionaEmpregado($func1);
$empresa->adicionaEmpregado($func2);

$empresa->variosEmpregados($funcionarios);

echo '<h3>Exibindo os empregados da empresa:</h3>';
$funcionariosEmpresa = $empresa->getEmpregados();

foreach($funcionariosEmpresa as $funcionario){
    $funcionario->exibeDados();
}

echo '<br/><h3>Funcionário pertente a empresa:</h3><br/>';

echo ( $empresa->fazParteDaEmpresa($func1) ? 'O(A) funcionário(a)' . $func1->getNome() . ' faz parte da empresa.<hr><br/>' : 'O(A) funcionário(a)' . $func1->getNome() . ' faz parte da empresa.<hr><br/>' );

echo ( $empresa->fazParteDaEmpresa($func1) ? 'O(A) funcionário(a)' . $func3->getNome() . ' faz parte da empresa.<hr><br/>' : 'O(A) funcionário(a)' . $func3->getNome() . ' faz parte da empresa.<hr><br/>' );

echo '<br/><h3>Removendo funcionários:</h3><br/>';
$empresa->adicionaEmpregado($func3);
echo '<h4>Antes:</h4><br/>';

foreach($empresa->getEmpregados() as $funcionario){
    $funcionario->exibeDados();
}

echo '<h4>Depois:</h4><br/>';
$empresa->demitirEmpregado($func3);
foreach($empresa->getEmpregados() as $funcionario){
    $funcionario->exibeDados();
}