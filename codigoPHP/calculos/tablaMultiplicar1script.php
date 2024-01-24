<html>
<head>
    <title>Ejemplo arrays</title>
</head>   

<body>
    <!-- Vamos a crear una tabla de multiplicar -->

    <table border="1" cellspacing="0">
        <tr style="background-color: 00CCFF; font-weight: bold"> <!-- trabre filas de tablas -->
            <td width="200" align="center">Primera tabla</td>
            <td width="200" align="center">Segunda tabla</td>
            <td width="200" align="center">Tercera tabla</td>
        </tr>

        <?php
        //abrimos script php

        //tabla de multiplicar del 5 del 13 y del 11
        $resultado=0;
        $tablas = array(
            'primera' => 5,
            'segunda' => 13,
            'tercera' => 11
        );

        for ($i = 1; $i < 10; $i++) {
            echo '<tr>';
            
            foreach ($tablas as $value) {
                $resultado = $value * $i;
                echo '<td align="center">' . $value . ' x ' . $i . ' = ' . $resultado . '</td>';
            }

            echo '</tr>';
        }
        ?>

    </table>
</body>
</html>