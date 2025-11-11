<?php
    declare(strict_types=1);

    use cefet\banco\modelo\Conta;
    use cefet\banco\modelo\ContaCorrente;
    use cefet\banco\modelo\ContaPoupanca;

    $c = new Conta(123, "Fulano");
    $c->setNomeDoTitular("Fulano de tal");
    $c->deposita(1000);

    $cc = new ContaCorrente(456);
    $cc->setNomeDoTitular("Beltrano");
    $cc->deposita(1000);

    $cp = new ContaPoupanca(789, "Ciclano");
    $cp->deposita(1000);

    echo "<hr>SALDO DAS CONTAS ANTES DE ATUALIZAR:<hr>";
    echo "Conta \$c = {$c->getSaldo()}<br>";
    echo "Conta \$cc = {$cc->getSaldo()}<br>";
    echo "Conta \$cp = {$cp->getSaldo()}<br><br>";

    $c->atualiza(0.01);
    $cc->atualiza(0.01);
    $cp->atualiza(0.01);

    echo "<hr>SALDO DAS CONTAS DEPOIS DE ATUALIZAR:<hr>";
    echo "Conta \$c = {$c->getSaldo()}<br>";
    echo "Conta \$cc = {$cc->getSaldo()}<br>";
    echo "Conta \$cp = {$cp->getSaldo()}<br>";