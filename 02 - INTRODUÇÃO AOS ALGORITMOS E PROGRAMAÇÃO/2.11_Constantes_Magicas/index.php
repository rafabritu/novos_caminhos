<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Constantes Magicas');

/*
Exemplos:
__DIR__(Captura o diretório absoluto do arquivo)
__LINE__(Captura linha em que está declarado)
__FILE__(Caminho absoluto do arquivo)
__CLASS__(Captura a Classe)
*/

PHPClassSession('Constantes', __LINE__);

//Declarar constantes
define("COURSE", "Programador WEB"); //É interpretado durante a execução
const AUTHOR = "Governo Federal"; //É interpretado antes da execução

$formation = false;

if ($formation) {
    define("course_type", "Formação");
} else {
    define("course_type", "Curso");
}

echo "<p>" . course_type . " " . COURSE . " do " . AUTHOR . "</p>";

echo "<p> {$course_type} {$COURSE} do {$AUTHOR} </p>";
//Pode declarar variaveis dentro de chaves, constantes não
echo "<p> {course_type} {COURSE} do {AUTHOR} </p>";

class Config //Uso comum
{
    const USER = "root";
    const HOST = "localhost";
}

//Não se usa isso em aplicações

//var_dump(get_defined_constants(true));
//Todas 


var_dump(get_defined_constants(true)["user"]);
//Definidas pelo usuário

PHPClassSession('Constantes Mágicas', __LINE__);

var_dump([
    __DIR__,
    __FILE__,
    __LINE__,
    __CLASS__,
]);