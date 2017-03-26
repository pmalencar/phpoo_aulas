<?php

class Pessoa 
{
    public $nome;
    public $idade;         
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Paulo";
$pessoa1->idade = 35;

$pessoa2 = new Pessoa();
$pessoa2->nome = "João";
$pessoa2->idade = 6;

echo $pessoa1->nome;
echo $pessoa2->nome;