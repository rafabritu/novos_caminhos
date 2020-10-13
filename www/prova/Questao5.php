<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

$sequence = [3, 5, 67, 98, 3];

//var_dump($sequence);

function almostIncreasingSequence($sequence)
{
    $teste = Null;
    foreach ($sequence as $b => $value) {
        $copy = $sequence;
        unset($copy[$b]);
        //var_dump($copy);
        foreach ($copy as $key => $value) {
            $resc[] = $value;
        }
        //var_dump($resc);

        for ($i = 0; $i < (count($resc) - 1); $i++) {
            if ($resc[$i] > $resc[$i + 1]) {
                $teste = false;
                $i = count($resc);
            } else {
                $teste = true;
            }
        }
        //var_dump($teste);
        if ($teste == true) {
            break;
        }
        $resc = null;
    }
    return $teste;
}


var_dump(almostIncreasingSequence($sequence));