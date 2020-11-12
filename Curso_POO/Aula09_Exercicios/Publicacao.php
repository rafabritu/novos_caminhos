<?php
require_once 'Livro.php';
interface Publicacao
{
    function abrir($pe);
    function fechar();
    function folhear();
    function avancarPag();
    function voltarPag();
}
