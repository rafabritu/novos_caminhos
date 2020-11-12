<?php
require __DIR__ . '/../framework/config.php';

PHPClassSession('echo', __LINE__);

echo "<p>Olá mundo</p>";
echo 23 . PHP_EOL;

$hello = "Olá Mundo!!";

echo $hello;

PHPClassSession('print_r', __LINE__);

$array = [
    "company" => "IFTO",
    "course" => "Programador WEB",
    "class" => "Comandos de Saída",
];
echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession('var_dump', __LINE__);

$company = "IFTO";
var_dump($array, $hello, $company);