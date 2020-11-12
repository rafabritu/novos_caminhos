<?php

declare(strict_types=1);

use source\Address;
use source\Company;
use source\User; //Adicionado automáticamente php namespace resolver

require __DIR__ . '/../framework/config.php';
PHPClassName('Carregamento automatico de classes');

/*
*
*/
PHPClassSession('AutoLoad com Composer', __LINE__);

require_once __DIR__ . "/vendor/autoload.php";

$user = new User;
$adress = new Address;
$company = new Company;
var_dump($user, $adress, $company);