<?php

    $v_hola = "Hola Mundo";
    $img = "img/ropa13.jpeg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola Mundo con PHP</title>
</head>
<body>
    <div class="container">
        <div class="titulo">
            <?php echo $v_hola;?>
        </div>
        <div class="img">
            <img src="<?php echo $img; ?>" />
        </div>
    </div>
</body>
</html>