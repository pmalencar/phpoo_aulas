<?php

require_once "pessoa.php";

$pessoa1 = new Pessoa("Franciso",45);

$pessoa2 = new Pessoa("Maria",36);

echo $pessoa1->nome;
echo "<br />";
echo $pessoa1->correr(100);
echo "<br />";
echo $pessoa2->nome;