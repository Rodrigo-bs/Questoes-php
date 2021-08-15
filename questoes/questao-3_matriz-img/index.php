<?php
$imgs_arrays = [['img1.jpg', 'img2.jpg', 'img3.png'], ['img4.jpg', 'img5.jpg', 'img6.jpg'], ['img7.jpg', 'img8.jpg', 'img9.jpg']];
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
            foreach ($imgs_arrays as $img_array) {

                echo '<tr>';
                foreach ($img_array as $img)
                    echo '<td><img src="./img/'.$img.'" title="'.$img.'"></td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>