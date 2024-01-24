<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Tipos integer</title>
    </head>
    <body>
        <?php
        //APRENDIENTO EL USO DE TIPOS
        $numCoches = 0;    
        $cochesAlmacen = 2;
        echo "El numero de coches es: ".$numCoches; //con el punto estamos concatenando
        
        //cambiar el contenido
        $numCoches = 10;
        echo "<br> Ahora el numero de coches es: ".$numCoches;

        //Dar valor de una variable a otra
        $numCoches = $cochesAlmacen;
        echo "<br> Ahora el numero de coches es: ".$numCoches;
        ?>
    </body>
</html>