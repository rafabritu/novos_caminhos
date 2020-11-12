<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO - Aula 05</title>
</head>

<body>
    <?php
    require_once 'Banco.php';
    $p1 = new Conta;
    $p2 = new Conta;
    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p2->abrirConta("CP");
    $p2->setDono("Creuza");
    $p1->setNumConta(1111);
    $p2->setNumConta(2222);
    $p1->depositar(300);
    $p2->depositar(500);
    $p2->sacar(100);
    $p1->pagarMensal();
    $p2->pagarMensal();
    $p1->sacar(338);
    $p1->fecharConta();
    $p2->sacar(530);
    $p2->fecharConta();
    ?>
</body>

</html>