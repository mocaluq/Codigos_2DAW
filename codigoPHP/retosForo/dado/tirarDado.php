<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Importamos la clase Dado

    require_once 'claseDado.php';

    //Hacemos un new de dado, donde le pasamos el numero min y el max

    $dado = new Dado(0,12);

    //Creamos un for para mostrar las 12 primeras tiradas

    for($i = 0; $i < 12; $i++){
        echo $dado->tirarDado(). '<br>';
    }

    ?>
</body>
</html>