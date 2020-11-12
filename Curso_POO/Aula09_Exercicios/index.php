<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Exercício prático POO</title>
</head>

<body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    $p = new Pessoa("Rafael", 24, "Masculino");
    $l = new Livro("5 linguagens do amor", "Kátia", 230);
    $l->abrir($p);
    $l->folhear();
    $l->detalhes();
    $l->avancarPag();
    $l->detalhes();
    $l->fechar();
    $l->avancarPag();
    ?>
</body>

</html>