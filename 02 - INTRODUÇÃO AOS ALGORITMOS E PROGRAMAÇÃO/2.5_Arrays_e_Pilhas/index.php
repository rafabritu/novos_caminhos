<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.5_Arrays_e_Pilhas');

/*
*
*/
PHPClassSession('INDEX ARRAY', __LINE__);

$arrA = array(1, 2, 3);
var_dump($arrA);

$arrB = [0, 1, 2, 3];
var_dump($arrB);

$arraynomes = [
    "Iury",
    "Daniel",
    "Luciano"
];

$arraynomes[] = "Fernando";
$arraynomes[] = "José Roberto";
$arraynomes[] = 50;

var_dump($arraynomes);

PHPClassSession('ASSOCIATIVE ARRAY', __LINE__);

$arrayIFTO = [
    "Docente" => "Iury Gomes",
    "Tutor1" => "Fernando",
    "Tutor2" => "Daniel",
    "Tutor3" => "Luciano",
];

$arrayIFTO["Supervisor"] = "José Roberto";
$arrayIFTO["Turma"] = "Programador WEB Novos Caminhos";

var_dump($arrayIFTO, $arraynomes[3], $arrayIFTO["Tutor3"]);

PHPClassSession('MULTIDIMENSIONAL ARRAY', __LINE__);
//Vetor com outros vetores dentro

$coordenacao = [
    "Coordenação" => [
        "Coordenação Administrativa" => "Pedrinha",
        "Coordenação de Extensão" => "Jade",
    ]
];

$time = [
    $coordenacao,
    $arrayIFTO,
];

var_dump($time);

PHPClassSession('ARRAY ACCESS', __LINE__);

echo "Equipe Programador WEB" . PHP_EOL;

foreach ($arrayIFTO as $valor) {

    echo "<p>$valor</p>";
}

echo "Equipe Programador WEB" . PHP_EOL;

foreach ($arrayIFTO as $posicao => $valor) {

    echo "<p>$valor é o $posicao do IFTO!</p>";
}

echo $arrayIFTO["Tutor2"]; //Mostrar variável específica que está em um vetor