<?php
// Fiz usado Orientacao a objeto
include './palidromo.class.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    if (isset($_GET['frase'])) {
        $palavra = $_GET['frase'];
    
        $palidromo = new Palidromo($palavra);
        if ($palidromo->comparar()) {
            echo '<h1>A Frase "'.$palavra.'" Forma um Palídromo.</h1>';
        } else {
            echo '<h1>A Frase "'.$palavra.'" Não Forma um Palídromo.</h1>';
        }
    } else {
        echo '<h1>Frase não encontrada, volte para <a href="index.html">Home</a></h1>';
    }
    
    ?>
</body>
</html>