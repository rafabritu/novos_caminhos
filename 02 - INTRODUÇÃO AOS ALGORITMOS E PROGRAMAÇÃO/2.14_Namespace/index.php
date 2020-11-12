<?php

declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
<<<<<<< HEAD
PHPClassName('Namespace');
/*
*
*/
PHPClassSession('', __LINE__);
=======
PHPClassName('2.14 Namespace');


PHPClassSession('Namespace', __LINE__);

require_once __DIR__ . "/classes/App/Template.php";
require_once __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);
>>>>>>> iuryrepo/master
