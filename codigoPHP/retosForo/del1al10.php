<!DOCTYPE html>
<html>
<head>
    <title>Del 1 al 10</title>
</head>
<body>

<table border="1">
    <!-- con tr definimos la fila de la tabla en este caso del encabezado -->
    <tr>
        <th>Cardinal</th> <!-- <th> define celdas de encabezado -->
        <th>Ordinal</th>
    </tr>
    <?php

    $numero= 1;
    while($numero <= 10){ //Al while le decimos que mientras $numero no sea menor o igual que 10 que siga el bucle

       //<tr> define una fila en una tabla (se repite el bucle 10 veces, se crearán 10 filas) 
       //<td> insertamos un número en cada itinerancia dentro de las celdas de la tabla
        echo "<tr>
                <td>$numero</td> 
                <td>"; 
        
        // Asignamos mediante la estructura de control switch el número cardinal correspondiente
        switch ($numero) {
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

        echo "</td></tr>";

        $numero++;
    }
    ?>
</table>

</body>
</html>