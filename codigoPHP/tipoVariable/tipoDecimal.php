<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Tipos Decimales</title>
    </head>
    <body>
        <?php
            //Definicion de variables
            $dinero = 3.50;
            echo "El dinero que tengo es: ".$dinero;

            //Cambiar el contenido
            $dinero = 10.66;
            echo "<br> El dinero que tengo es: ".$dinero;

            //Convirtiendo a entero
            $soloEuros = (int) $dinero;
            echo "<br> Los euros que tengo: ".$soloEuros;

            //Convirtiendo a decimal
            $soloEuros2 = 5;
            $centimos = 43;
            $dineroTotal = $soloEuros2 + ($centimos/100);
            echo "<br> El dinero total es: ".$dineroTotal;

        ?>
    </body>
</html>