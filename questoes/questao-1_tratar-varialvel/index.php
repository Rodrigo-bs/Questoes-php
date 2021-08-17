<?php

$a = 'código;php;linguagem*nota;ifac;aluno*professor;bimestre;prova*computador;programação;web';
$linhas = explode('*', $a);

echo '<pre>';
print_r($linhas);
echo '</pre>';

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
    <table>
        <?php
        
        foreach ($linhas as $linha) {
            $colunas = explode(';', $linha);
        
            echo '<tr>';
            foreach ($colunas as $coluna)
                echo '<td>'.$coluna.'</td>';
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>