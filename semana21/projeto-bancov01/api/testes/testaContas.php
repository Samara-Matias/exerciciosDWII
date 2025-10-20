<?php

declare( strict_types = 1 );
require_once '../modelo/Cliente.php';
require_once '../modelo/Conta.php';

$cliente1 = new Cliente( 'Fulano' );
$cliente2 = new Cliente( 'Alguém' );
$cliente3 = new Cliente();

$cliente3->setNome('Ana');

$cliente1->setCpf( '123.456.789-01' );
$cliente2->setCpf( '321.654.987-10');
$cliente3->setCpf('987.654.321-01');

$cliente1->setEmail( 'nossoemail@gmail.com' );
$cliente2->setEmail( 'meuemail@gmail.com' );
$cliente3->setEmail( 'seuemail@gmail.com' );

$conta1 = new Conta( 123, $cliente1);
$conta1->deposita( 3000 );

$conta2 = new Conta( 435, $cliente2);
$conta2->deposita( 4000 );

$conta3 = new Conta( 521, $cliente3);
$conta3->deposita( 2500 );

echo '<h2>Conta 1:</h2><br/>';

$conta1->exibeDados();
echo '<br/>';

echo '<h2>Conta 2:</h2><br/>';

$ul = '<ul>';
$ul .= "<li><b>Número: </b>{$conta2->getNumero()}</li>";
$ul .= "<li><b>Saldo: </b>{$conta2->getSaldo()}</li>";
$ul .= "<li><b>Titular: </b>{$conta2->getTitular()->exibeDados()}</li>";
$ul .= '</ul>';
echo $ul;

echo '<br/>';

echo '<h2>Conta 3:</h2><br/>';

$ul = '<ul>';
$ul .= "<li><b>Número: </b>{$conta3->getNumero()}</li>";
$ul .= "<li><b>Saldo: </b>{$conta3->getSaldo()}</li>";
$ul .= "<li><b>Informações do Titular:</b>";
	$ul .= "<ul>";
		$ul .= "<li><b>Nome: </b>{$conta3->getTitular()->getNome()}</li>";
		$ul .= "<li><b>Cpf: </b>{$conta3->getTitular()->getCpf()}</li>";
		$ul .= "<li><b>Email: </b>{$conta3->getTitular()->getEmail()}</li>";
	$ul .= "</ul>";
$ul .= "</li>";
$ul .= '</ul>';
echo $ul;

$conta1->transferePara($conta3, 1500);
$conta1->saca(200.00);
$conta1->transferePara($conta3, 300.00);
$conta2->saca(500.00);

$conta3->exibeDados();


echo '<h2>Testando erros</h2>';

// Testando criação de conta com número inválido
echo "<h3>1. Testando criação de conta com número inválido:</h3>";
$clienteTeste = new Cliente('Teste');
$clienteTeste->setCpf('111.222.333-44');
$clienteTeste->setEmail('teste@email.com');

$contaInvalida = new Conta(0, $clienteTeste);

// Testando operações de saque
echo "<h3>2. Testando operações de saque:</h3>";
// Saque com valor negativo
if (!$conta1->saca(-100)) {
    echo "Saque com valor negativo recusado<br/>";
} else {
    echo "Saque com valor negativo realizado<br/>";
}

// Saque com valor zero
if (!$conta1->saca(0)) {
    echo "Saque com valor zero recusado<br/>";
} else {
    echo "Saque com valor zero realizado<br/>";
}

// Saque com valor maior que saldo
$saldoAtual = $conta1->getSaldo();
if (!$conta1->saca($saldoAtual + 1000)) {
    echo "Saque com valor maior que saldo recusado<br/>";
} else {
    echo "Saque com valor maior que saldo realizado<br/>";
}

// Saque válido
if ($conta1->saca(100)) {
    echo "Saque de R$ 100,00 realizado com sucesso<br/>";
    echo "Novo saldo: R$ " . $conta1->getSaldo() . "<br/>";
} else {
    echo "Saque válido recusado<br/>";
}

// Testando operações de depósito
echo "<h3>3. Testando operações de depósito:</h3>";
// Depósito com valor negativo
if (!$conta2->deposita(-50)) {
    echo "Depósito com valor negativo recusado<br/>";
} else {
    echo "Depósito com valor negativo realizado<br/>";
}

// Depósito com valor zero
if (!$conta2->deposita(0)) {
    echo "Depósito com valor zero recusado<br/>";
} else {
    echo "Depósito com valor zero realizado<br/>";
}

// Depósito válido
if ($conta2->deposita(500)) {
    echo "Depósito de R$ 500,00 realizado com sucesso<br/>";
    echo "Novo saldo: R$ " . $conta2->getSaldo() . "<br/>";
} else {
    echo "Depósito válido recusado<br/>";
}

// Testando transferências
echo "<h3>4. Testando transferências:</h3>";
$saldoConta1 = $conta1->getSaldo();
$saldoConta3 = $conta3->getSaldo();

echo "Saldo antes da transferência - Conta 1: R$ $saldoConta1, Conta 3: R$ $saldoConta3<br/>";

// Transferência com valor maior que saldo
if (!$conta1->transferePara($conta3, $saldoConta1 + 1000)) {
    echo "Transferência com valor maior que saldo recusada<br/>";
} else {
    echo "Transferência com valor maior que saldo realizada<br/>";
}

// Transferência válida
if ($conta1->transferePara($conta3, 200)) {
    echo "Transferência de R$ 200,00 realizada com sucesso<br/>";
    echo "Saldo após transferência - Conta 1: R$ " . $conta1->getSaldo() . ", Conta 3: R$ " . $conta3->getSaldo() . "<br/>";
} else {
    echo "Transferência válida recusada<br/>";
}

// Testando validações do Cliente
echo "<h3>5. Testando validações do Cliente:</h3>";

$clienteErro = new Cliente();

// Nome inválido
if (!$clienteErro->setNome('Ab')) {
    echo "Nome 'Ab' recusado - deve ter 3 ou mais caracteres<br/>";
} else {
    echo "Nome inválido aceito<br/>";
}

// CPF inválido (formato errado)
if (!$clienteErro->setCpf('12345678901')) {
    echo "CPF '12345678901' recusado - formato inválido<br/>";
} else {
    echo "CPF inválido aceito<br/>";
}

// CPF inválido (pontuação errada)
if (!$clienteErro->setCpf('123.456.789/01')) {
    echo "CPF '123.456.789/01' recusado - formato deve ser 000.000.000-00<br/>";
} else {
    echo "CPF com formato errado aceito<br/>";
}

// Email inválido (sem @)
if (!$clienteErro->setEmail('emailinvalido.com')) {
    echo "Email 'emailinvalido.com' recusado - deve conter @<br/>";
} else {
    echo "Email sem @ aceito<br/>";
}

// Email inválido (sem .)
if (!$clienteErro->setEmail('email@invalido')) {
    echo "Email 'email@invalido' recusado - deve conter .<br/>";
} else {
    echo "Email sem . aceito<br/>";
}

// Dados válidos
if ($clienteErro->setNome('Carlos') && $clienteErro->setCpf('999.888.777-66') && $clienteErro->setEmail('carlos@email.com')) {
    echo "Todos os dados válidos foram aceitos:<br/>";
    echo "Nome: " . $clienteErro->getNome() . "<br/>";
    echo "CPF: " . $clienteErro->getCpf() . "<br/>";
    echo "Email: " . $clienteErro->getEmail() . "<br/>";
} else {
    echo "Dados válidos foram recusados<br/>";
}