<?php    
$valorReal = str_replace(',', '.', $_GET['real']);
$valorDolar = str_replace(',', '.', $_GET['dolar']);



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
        <tr>
            <th>Valor em R$</th>
            <th>Cotação</th>
            <th>valor em Dolar</th>
        </tr>
        <tr>
            <td><?=$valorReal?></td>
            <td><?=$valorDolar?></td>
            <td><?=number_format($valorReal / $valorDolar, 2)?></td>
        </tr>
    </table>
</body>
</html>