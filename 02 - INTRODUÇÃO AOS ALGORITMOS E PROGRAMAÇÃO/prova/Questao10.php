<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"

$inputString = "(bar)";


function reverseInParentheses($inputString)
{
    $bom = explode("(", $inputString);
    preg_match_all("#\([\w]\)#i", $inputString, $teste);
    var_dump($teste);
}

reverseInParentheses($inputString);