<?php

$a = 'código;php;linguagem*nota;ifac;aluno*professor;bimestre;prova*computador;programação;web';
$linhas = explode('*', $a);

?>

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