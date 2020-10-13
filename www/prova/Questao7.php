<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

$s1 = "aabcc";
$s2 = "adcaa";

$cont = substr_count($s2, "b");

function commonCharacterCount($s1, $s2)
{
    $splited = str_split($s1, 1);
    $cont = 0;
    foreach ($splited as $key => $value) {
        echo "<br>" . $value;
        $cont += substr_count($s2, $value);
        echo "<br>" . $cont;
    }
    return $cont;
}

commonCharacterCount($s1, $s2);
