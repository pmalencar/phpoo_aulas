<?php


$pessoa1 = new Pessoa();
$pessoa1->nome = "Paulo";
$pessoa1->idade = 35;

$pessoa2 = new Pessoa();
$pessoa2->nome = "João";
$pessoa2->idade = 6;

echo $pessoa1->nome;
echo "<br />";
echo $pessoa1->correr(100);
echo "<br />";
echo $pessoa2->nome;
