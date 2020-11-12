<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.6_Estruturas_de_Controle');

/*
*
*/
PHPClassSession('IF, ELSEIF, ELSE', __LINE__);

$A = true;

if ($A) {
    echo "Verdade";
} else {
    echo "Mentira";
}

$idade = 45;             //if = Se  Else= Senão  elseif = Senão se
if ($idade < 20) {
    var_dump("IFTO");
} elseif ($idade > 20 && $idade < 50) {
    var_dump("Programador WEB");
} else {
    var_dump("Novos Caminhos");
}

PHPClassSession('ISSET, EMPTY, !', __LINE__);

//ISSET - Verifica se uma variável existe

$time = "Seleção Brasileira";

if (isset($tiem)) {  //$Time foi criada?
    var_dump("JESUS É LINDO!");
} else {
    var_dump("O DIABO NÃO PRESTA!");
}

//EMPTY - Verifica se uma variável tem valor

if (empty($time)) {  //$Time está vazio?
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

if (!empty($time)) {  //Você pode inverter o resultado 
    var_dump("PROGRAMADOR WEB"); //da verificação usando !
} else {
    var_dump("NOVOS CAMINHOS");
}

PHPClassSession('SWITCH', __LINE__);

$payment = "completed";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto impresso");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento Aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento");
        break;
}