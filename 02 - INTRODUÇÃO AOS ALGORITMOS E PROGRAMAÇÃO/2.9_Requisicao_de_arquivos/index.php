<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Requisição de arquivos');


PHPClassSession('include, include_once', __LINE__);

include "header.php"; //Incluiu o código de outro arquivo, podendo criar arquivos separados com funções específicas

include __DIR__ . "/header.php"; //Mais correto usando DIR

var_dump(__DIR__);



include "profile.php"; //Pode pesar o navegador por fazer varias requisições


include_once "profile.php"; //Só inclui uma vez




//include "file.php"; //O script continua mesmo se não encontrar(Arquivos dispensáveis)
echo "<p>CONTINUE</p>";

PHPClassSession('require, require_once', __LINE__);

//require "file.php"; //O script para se não encontrar(Arquivos indispensáveis)
echo "<p>CONTINUE</p>";

//Require once é igual include_once