<?php

$valorInicial = $_GET['nr_i'];
$valorFinal = $_GET['nr_f'];

if ($valorInicial > $valorFinal) {
   die('<h1>O intervalo é inválido!</h1>');
} 

$valorVoltas = ($valorFinal - $valorInicial) / 5;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="container">
    <div>
        <h1>Lista de Valores: </h1>
        <p id="par-men">Valores Pares</p>
        <p id="imp-men">Valores Ímpares</p>
        <table class="tabela">
            <?php
                $ultimoNumero = $valorInicial;
                for ($i = 0; $i < $valorVoltas; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 5; $j++) {
                        if ($ultimoNumero + 1 < $valorFinal) {
                            $ultimoNumero = $ultimoNumero + 1;
                            if ($ultimoNumero % 2 == 0) echo '<td class="par">'.$ultimoNumero.'</td>';  
                            else echo '<td class="impar">'.$ultimoNumero.'</td>';
                        } else {
                            echo '<td>---</td>';
                        }
                    }

                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>