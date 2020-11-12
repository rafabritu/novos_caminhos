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
    $c1 = new Caneta;
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    //$c1->ponta = 0.5; Não pode ser acessado fora da classe
    //$c1->carga = 99;
    //$c1->tampada = true;
    $c1->rabiscar();

    //$c1->tampar();

    $c1->destampar(); //Para acessar um atributo privado ou protegido, você usa um método público da classe
    var_dump($c1);
    ?>
</body>

</html>