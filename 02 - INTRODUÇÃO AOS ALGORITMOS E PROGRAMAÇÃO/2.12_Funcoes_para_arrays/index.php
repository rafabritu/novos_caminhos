<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Funções de Vetores');

/*
*
*/
PHPClassSession('Manipulação', __LINE__);

$index = [
    "FRONT END DEV",
    "BACK END DEV",
    "FULL STACK DEV",
];

$assoc = [
    "dev1" => "FRONT END DEV",
    "dev2" => "BACK END DEV",
    "dev3" => "FULL STACK DEV",
];

array_unshift($index, "", "FULL CYCLE DEV"); //Adiciona ao início
$assoc = ["dev4" => "FULL CYCLE DEV"] + $assoc;
//$assoc = ["", "FULL CYCLE DEV"]; //Dessa forma sobrescreve

array_push($index, "DEVOPS"); //Adiciona ao final
$assoc = $assoc + ["dev5" => "DEVOPS"];

// array_shift($index); //Retira o primeiro elemento
// array_shift($assoc);

// array_pop($index); //Retira o ultimo elemento
// array_pop($assoc);

// $index = array_filter($index);
// $assoc = array_filter($assoc);


// var_dump($index, $assoc);


PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index); //Inverte a ordem
$assoc = array_reverse($assoc); //Inverte a ordem

asort($index); //Ordem Alfabética, considerando os valores
asort($assoc); //Ordem Alfabética, considerando os valores

ksort($index); //Ordem Alfabética, considerando o índice
ksort($assoc); //Ordem Alfabética, considerando o índice

//sort($assoc); //Ordem alfabética considerando os valores e removendo o indice

var_dump($index, $assoc);

PHPClassSession('Verificação', __LINE__);

var_dump(
    [
        array_keys($assoc), //Extrai os índices
        array_values($assoc), //Extrai os valores
    ]
);

if (in_array("FRONT END DEV", $assoc)) {
    echo "<p> Existe um Developer</p>";
}

$arraytostring = implode(", ", $assoc); //Exporta os elementos do vetor separados pelo que está no primeiro argumento

echo "<p> Eu sou {$arraytostring} !</p>";
echo "<p>{$arraytostring}</p>";

var_dump(explode(", ", $arraytostring)); //Transforma String em vetor baseado no primeiro argumento

PHPClassSession('Exemplo prático', __LINE__);

$profile = [
    "name" => "Rafael",
    "company" => "Megabyte",
    "mail" => "rafaelbritohs@gmail.com",
];

$template = <<<TPL
<article>
    <h1>name</h1>
    <p>company<br>
    <a href="mailto{{mail}}"> Enviar para mail </a>
    </p>
</article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);