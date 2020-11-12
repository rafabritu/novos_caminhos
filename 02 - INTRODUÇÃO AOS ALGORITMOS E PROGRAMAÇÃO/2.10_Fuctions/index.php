<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Functions');

require __DIR__ . '/functions.php';

PHPClassSession('functions', __LINE__);

var_dump(Vetor("IFTO", "NOVOS CAMINHOS", "PROGRAMADOR WEB"));

var_dump(Vetor("Rafael", "Jéssica", "Pitter"));

var_dump(IMCCALC(1.72, 84));
var_dump(IMCCALC(1.50, 72));
var_dump(IMCCALC(1.90, 100));

PHPClassSession('global access', __LINE__);

$altura = 1.72;
$peso = 84;

var_dump(IMCCALC_global()); //Dispensa argumentos

PHPClassSession('static arguments', __LINE__);

$pay = paytotal(200);
$pay = paytotal(150);
$pay = paytotal(500);

var_dump($pay);

PHPClassSession('dinamic arguments', __LINE__);

var_dump(team());
var_dump(team("Fernando"));
var_dump(team("Fernando", "Iury", "Daniel", "Marcos"));