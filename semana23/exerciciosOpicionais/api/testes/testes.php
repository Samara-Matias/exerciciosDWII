<?php
declare(strict_types=1);

require_once __DIR__ . '/../modelo/Porta.php';
require_once __DIR__ . '/../modelo/Casa.php';

// Cria portas
$porta1 = new Porta("Marrom", 0.90, 2.10);
$porta2 = new Porta("Branca", 0.80, 2.00);

// Modifica estado das portas
$porta1->abre();
$porta2->fecha();

// Cria uma casa
$casa = new Casa("Amarela", array($porta1, $porta2));

// Testa comportamentos
$casa->pinta("Verde");
$porta2->abre();

// Exibe tudo
$casa->exibeDados();