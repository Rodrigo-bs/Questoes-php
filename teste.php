<?php
$valorInicial = 10;
$valorFinal = 50;

$valorVoltas = ($valorFinal - $valorInicial) / 5;

$ultimoNumero = $valorInicial;

?>

<style>
    .par {
        color: #5e97f2;
    }

    .impar {
        color: #5ef26a;
    }
</style>

<table>
    <?php
    
    for ($i = 0; $i < $valorVoltas; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 5; $j++) {
            if ($ultimoNumero + 1 < $valorFinal) {
                $ultimoNumero = $ultimoNumero + 1;
                if ($ultimoNumero % 2 == 0)
                    echo '<td class="par">'.$ultimoNumero.'</td>';  
                else
                    echo '<td class="impar">'.$ultimoNumero.'</td>';
            } else {
                echo '<td>---</td>';
            }
        }
    
        echo '</tr>';
    }

    ?>
</table>