<?php
declare(strict_types=1);

require_once __DIR__ . '/../modelo/Funcionario.php';

// Cria objetos Data para os funcionários
$data1 = new Data("15", "03", "1995");

// Cria funcionários
$func1 = new Funcionario("Ana Fulana", "TI", 15500.00, $data1);
$func2 = new Funcionario("Carlos Ciclano", "TI", 6000.00, new Data( "28", "10", "1988" ) );

echo "<h3>Funcionários Iniciais:</h3>";

echo "Nome: " . $func1->getNome() . "<br>";
echo "Departamento: " . $func1->getDepartamento() . "<br>";
echo "Salário: R$ " . $func1->getSalario() . "<br>";
echo "Ativo: " . ($func1->isAtivo() ? "Sim" : "Não") . "<br>";
echo "Data de Nascimento: " . $func1->getDataNascimento()->getDataBR() . "<br><hr>";

echo "Nome: " . $func2->getNome() . "<br>";
echo "Departamento: " . $func2->getDepartamento() . "<br>";
echo "Salário: R$ " . $func2->getSalario() . "<br>";
echo "Ativo: " . ($func2->isAtivo() ? "Sim" : "Não") . "<br>";
echo "Data de Nascimento: " . $func2->getDataNascimento()->getDataBR() . "<br><hr>";

$func1->aumentaSalario(10); // Aumenta 10%
$func2->demite();           // Demite o segundo funcionário


echo "<h3>Exibindo apenas um funcionário:</h3>";
$func1->exibeDados();

echo "<h3>Após modificações:</h3>";
$func1->exibeDados();
$func2->exibeDados();