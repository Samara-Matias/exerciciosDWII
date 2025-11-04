<?php

declare( strict_types = 1 );

require_once '../modelo/Cliente.php';

$cliente1 = new Cliente( 'Fulano' );
$cliente2 = new Cliente( 'Alguém' );

$cliente1->setCpf( '123.456.789-01' );
$cliente2->setCpf( '321.654.987-10');

$cliente1->setEmail( 'nossoemail@gmail.com' );
$cliente2->setEmail( 'meuemail@gmail.com');

echo $cliente1->exibeDados();
echo '<br/>';

$ul = '<ul>';
$ul .= "<li><b>Nome: </b>{$cliente2->getNome()}</li>";
$ul .= "<li><b>CPF: </b>{$cliente2->getCpf()}</li>";
$ul .= "<li><b>Email: </b>{$cliente2->getEmail()}</li>";
$ul .= '</ul>';
echo $ul;

echo "<h2>Testando Erros</h2>";

$cliente3 = new Cliente();

// Testando nome inválido
if (!$cliente3->setNome('an')) {
    echo "❌ Não foi possível adicionar esse nome. Ele deve ter 3 ou mais caracteres.<br/>";
} else {
    echo "✅ Nome do cliente cadastrado com sucesso!<br/>";
}

// Testando nome válido
if (!$cliente3->setNome('Ana')) {
    echo "❌ Não foi possível adicionar esse nome. Ele deve ter 3 ou mais caracteres.<br/>";
} else {
    echo "✅ Nome 'Ana' cadastrado com sucesso!<br/>";
}

// Testando email inválido
if (!$cliente3->setEmail('seuemail@gmailcom')) {
    echo "❌ Insira um email válido. Ele deve conter @ e .<br/>";
} else {
    echo "✅ Email do cliente cadastrado com sucesso!<br/>";
}

// Testando email válido
if (!$cliente3->setEmail('seuemail@gmail.com')) {
    echo "❌ Insira um email válido. Ele deve conter @ e .<br/>";
} else {
    echo "✅ Email 'seuemail@gmail.com' cadastrado com sucesso!<br/>";
}

// Testando CPF inválido
if (!$cliente3->setCpf('098765.321')) {
    echo "❌ Formato de CPF inválido. Use: 000.000.000-00<br/>";
} else {
    echo "✅ CPF do cliente cadastrado com sucesso!<br/>";
}

// Testando CPF válido
if (!$cliente3->setCpf('123.456.789-01')) {
    echo "❌ Formato de CPF inválido. Use: 000.000.000-00<br/>";
} else {
    echo "✅ CPF '123.456.789-01' cadastrado com sucesso!<br/>";
}