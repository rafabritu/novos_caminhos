<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.
$inputString = "zzzazzazz";

function checkPalindrome($inputString)
{
    if (strrev($inputString) == $inputString) {
        return true;
    } else {
        return false;
    }
}

$check = checkPalindrome($inputString);
if ($check) {
    echo "<p>É um palíndromo!!";
} else {
    echo "<p>Não é um palíndromo!!";
}