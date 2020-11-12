<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <title>Aula 6 - Encapsulamento</title>
</head>

<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
    require_once 'Controlador.php';
    $c1 = new ControleRemoto;
    $c1->ligar();
    $c1->maisVolume();
    $c1->maisVolume();
    $c1->desligar();
    $c1->menosVolume();
    $c1->ligar();
    $c1->menosVolume();
    $c1->menosVolume();
    $c1->abrirMenu();
    ?>
    </pre>
</body>

</html>