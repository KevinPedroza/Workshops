<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Workshop #3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <div class="contenedor">
        <?php foreach($paises as $y=>$y_value):?>
            <h6>La Capital de <?php echo $y;?> es: <?php echo $y_value;?></h6>
            <br>
        <?php endforeach;?>

        <h5>Average Temperature is : <?php echo $total;?></h5>

        <h5>List of seven highest temperatures : <?php echo $lowest[0].",",$lowest[2].",",$lowest[3].",",$lowest[4].",",$lowest[5].",",$lowest[6];?></h5>

        <h5>List of seven lowest temperatures : <?php echo $hightest[0].",",$hightest[2].",",$hightest[3].",",$hightest[4].",",$hightest[5].",",$hightest[6];?></h5>
    </div>


</body>
</html>