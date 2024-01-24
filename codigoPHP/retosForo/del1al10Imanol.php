<html>
    <head>
        <title>Mostrar en pantalla una tabla</title>
    </head>
    <body>
        <?php
        echo "<table border=1>";

        echo"<tr>
        <th>Cardinal</th>
        <th>Ordinal</th>
        </trh>";

        $posicion=1;
        while($posicion<11)
        {
            echo "<tr>
            <td>$posicion</td>
            <td>";

            switch($posicion) {
                case 1:
                    echo "Primero";
                break;
                case 2:
                    echo "Segundo";
                 break;
                case 3:
                    echo "Tercero";
                break;
                case 4:
                    echo "Cuarto";
                break;
                case 5:
                    echo "Quinto";
                break;
                case 6:
                    echo "Sexto";
                break;
                   case 7:
                    echo "Séptimo";
                break;
                   case 8:
                    echo "Octavo";
                break;
                   case 9:
                    echo "Noveno";
                break;
                   case 10:
                    echo "Décimo";
                break;

               
            }
            echo "</tr></td>";
           
          $posicion++;      
        }
        echo "</table>";
       
        ?>

    </body>

</html>