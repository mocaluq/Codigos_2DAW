<html>
    <head>
        <title>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</title>
    </head>
    <body>
        <?php
        echo "<table border=1>"; //Si hubieramos abierto php dentro de table no tendriamos que hacer echo de table

        $n=1;
        for ($n1=1; $n1<=10; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
            {
                echo "<td>", $n, "</td>";
                $n=$n+1;
            }
            echo "</tr>";

        }
        echo "</table>";
        ?>

    </body> 








