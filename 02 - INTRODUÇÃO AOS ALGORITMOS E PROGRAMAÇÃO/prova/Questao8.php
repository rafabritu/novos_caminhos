<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

$n = 261534;

function isLucky($n)
{
    $separe = str_split($n, 1);
    $c = count($separe);
    $metC = $c / 2;
    //var_dump($c);
    //var_dump($metC);
    $soma1 = 0;
    $soma2 = 0;
    $i = 0;
    while ($i < $metC) {
        $soma1 += $separe[$i];
        $i++;
        //var_dump($soma1);
    }
    while ($i < $c) {
        $soma2 += $separe[$i];
        $i++;
        //var_dump($soma2);
    }
    if ($soma1 == $soma2) {
        return true;
    } else {
        return false;
    }
}

var_dump(isLucky($n));