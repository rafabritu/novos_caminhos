<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].
$inputArray = ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"];

//var_dump($inputArray);

function allLongestStrings($inputArray)
{
    $maior = strlen($inputArray[0]);
    var_dump($maior);
    $retorno = [];
    foreach ($inputArray as $key => $value) {
        if (strlen($inputArray[$key]) > $maior) {
            $maior = strlen($inputArray[$key]);
        }
        //var_dump($maior);
    }
    foreach ($inputArray as $key => $value) {
        if (strlen($inputArray[$key]) == $maior) {
            $retorno[] = $value;
        }
        //var_dump($retorno);
    }
    return $retorno;
}

var_dump(allLongestStrings($inputArray));