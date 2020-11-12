<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.7_Estruturas_de_repeticao');

/*
*
*/
PHPClassSession('while, do while', __LINE__);

$contador = 1;    //do = Faça    while= Enquanto
$vetor = [];

while ($contador <= 10) {
    $vetor[] = $contador;
    $contador++;
};

var_dump($vetor);

$contador = 10;

do {
    $vetor[] = $contador; //Aqui o vetor ja tinha os valores 1 - 10
    $contador--;
} while ($contador >= 0);

var_dump($vetor);


PHPClassSession('for', __LINE__);

for ($N = 0; $N <= 10; $N++) {  //Igual o while mas com estrutura mais simples
    echo "<p>$N</p>";
}

PHPClassSession('break, continue', __LINE__);

for ($N = 0; $N < 10; $N++) {

    if ($N % 2 == 1) {
        continue; //O continue ignora o restante do código e vai pro final
    }

    if ($N >= 10) {
        break; //Para o laço de repetição
    }

    echo "<p>Pulou + 2 :: {$N}</p>";
}

PHPClassSession('foreach', __LINE__);

$vetor = [];

for ($N = 0; $N < 20; $N++) {
    $vetor[] = "$N elefante";
}

foreach ($vetor as $variaveis => $valores) {
    var_dump("Posição $variaveis = $valores");
}

var_dump($vetor);