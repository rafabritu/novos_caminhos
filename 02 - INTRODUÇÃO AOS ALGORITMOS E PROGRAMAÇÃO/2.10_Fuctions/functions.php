<?php
/*
    //O que está aqui
$a = 0;

function Nome(arg1,arg2,arg3)
{
    //Não vai estar aqui

    $a = 1;

    # code...
}
*/

function Vetor($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function IMCCALC($altura, $peso)
{
    return $peso / ($altura * $altura);
}

function IMCCALC_global() //Dispensa argumentos
{
    global $peso; //variaveis globais, acessiveis fora da função
    global $altura;
    return $peso / ($altura * $altura);
}

function Paytotal($price)
{
    static $total; //Não perde o valor depois da função terminar(Fica na memória)
    $total += $price;
    return "<p>O total a pagar é</p>" . number_format($total, "2", ".", ",");
}

function team()
{
    $teamName = func_get_args();
    $teamCount = func_num_args();

    return ["Membros" => $teamName, "Quantidade" => $teamCount];
}