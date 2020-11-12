<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO - Aula 02</title>
</head>

<body>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta("Compactor", "Vermelha", 0.7);
    //$c1->setModelo("BIC"); //Uma proteção para alterar objetos
    //$c1->modelo = "NIC"; //Semelhante o anterior, mas sem método setter
    //$c1->setPonta(0.5);
    $c2 = new Caneta("Faber", "Preta", 1.0);
    var_dump($c1);
    echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";
    var_dump($c2);
    ?>
</body>

</html>