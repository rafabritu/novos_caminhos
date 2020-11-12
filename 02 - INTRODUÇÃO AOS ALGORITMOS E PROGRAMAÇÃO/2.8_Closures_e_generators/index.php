<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.8_Closures_e_generators');

/*
*
*/
PHPClassSession('Closures', __LINE__);

//Uma closure é uma variavel com uma função dentro

$media;

function media($nome, $n1, $n2, $n3, $n4) //Isso é uma função
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$nome foi aprovado com a média de $media. Parabéns!!";
    } else echo "$nome foi reprovado com a média de $media";
    echo "<br><br>";
}

media("Rafael", 6, 7, 9, 6);

media("Clara", 3, 4, 8, 4);

media("Carlos", 10, 10, 10, 10);

$media = function ($nome, $n1, $n2, $n3, $n4) //Isso é uma Closure
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$nome foi aprovado com a média de $media. Parabéns!!";
    } else echo "$nome foi reprovado com a média de $media";
    echo "<br><br>";
};

$media("Igor", 6, 7, 9, 6);

$media("Ben", 3, 4, 8, 4);

$media("Lidia", 10, 10, 10, 10);




$Aluno = "Iury";
$n1 = 4;
$n2 = 5;
$n3 = 10;
$n4 = 8;

$media = function () use ($Aluno, $n1, $n2, $n3, $n4) //Levando variáveis para dentro da closure
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$Aluno foi aprovado com a média de $media. Parabéns!!";
    } else echo "$Aluno foi reprovado com a média de $media";
    echo "<br><br>";
};

$media();

$Aluno = "George";
$n1 = 1;
$n2 = 10;
$n3 = 2;
$n4 = 9;

$media = function ($nome, $n1, $n2, $n3, $n4) //Levando variáveis para dentro da closure 2
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$nome foi aprovado com a média de $media. Parabéns!!";
    } else echo "$nome foi reprovado com a média de $media";
    echo "<br><br>";
};

$media($Aluno, $n1, $n2, $n3, $n4);


PHPClassSession('Generators', __LINE__);

$quant = 30;

function numeros($n) //O foreach executa a função na quantidade de vezes do $quant
{

    $list = [];
    for ($cont = 1; $cont <= $n; $cont++) {
        $list[] = $cont;
    }
    return $list;
}

foreach (numeros($quant) as $key => $value) {
    echo $value . PHP_EOL;
}