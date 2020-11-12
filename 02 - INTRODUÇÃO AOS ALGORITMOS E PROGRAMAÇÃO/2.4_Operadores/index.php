<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('CLASS_TITLE');

/*
*
*/
PHPClassSession('ATRIBUIÇÃO', __LINE__);

$A = 5;
$operators = [
    "A += 5" => ($A += 5),     // A = A + 5   A = 5 + 5      A=10  
    "A -= 5" => ($A -= 5),       // A = A - 5   A =  10-5       A=5    
    "A *= 5" => ($A *= 5),    // A = A * 5   A= 5 * 5        A=25    
    "A /= 5" => ($A /= 5),      // A = A / 5    A= 25/5         A=5     
];
var_dump($operators);

PHPClassSession('COMPARAÇÃO', __LINE__);

$A = 5;
$B = 5;
$increment = [
    "pós-incremento" => $A++,
    "res-incremento" => $A,
    "pré-incremento" => ++$A,
    "pós-decremento" => $B--,
    "res-decremento" => $B,
    "pré-decremento" => --$B,
];

var_dump($increment);

PHPClassSession('LÓGICOS', __LINE__);

// AND
// TRUE AND TRUE = TRUE
// TRUE AND FALSE= FALSE
// FALSE AND FALSE= FALSE

// OR
// TRUE OR TRUE = TRUE
// TRUE OR FALSE = TRUE
// FALSE OR FALSE= FALSE

// ! TRUE = FALSE
// ! FALSE = TRUE

// AND => &
// OR => ||

$A = true;
$B = false;

$logic = [
    "A && B" => ($A && $B),
    "A || B" => ($A || $B),
    "! A || B" => !($A || $B),
];

var_dump($logic);

PHPClassSession('ARITMETICOS', __LINE__);

$A = 10;
$B = 5;

$calc = [
    "A + B" => ($A + $B),
    "A - B" => ($A - $B),
    "A * B" => ($A * $B),
    "A / B" => ($A / $B),
    "A / B = Resto" => ($A % $B),
];

var_dump($calc);