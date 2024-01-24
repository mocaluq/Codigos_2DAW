<html>
    <head>
        <title>Ejemplo arrays</title>
    </head>   

    <body>
        <!-- Vamos a crear una tabla de multiplicar -->

        <table border="1" cellspacing="0">
            <tr style="background-color: 00CCFF; font-weight: bold"> <!-- tr abre fila de tablas -->
                <td width="200" align="center">Primera tabla</td>
                <td width="200" align="center">Segunda tabla</td>
                <td width="200" align="center">Tercera tabla</td>
            </tr>
            <?php //abrimos script php

            //tabla de multiplicar del 5 del 13 y del 11

            $resultado=0;
            $tablas = array(
                'primera' =>5,
                'segunda' =>13,
                'tercera' =>11
            );

            for ($i=1; $i<10; $i++){?> <!-- cerramos script php. SI UTILIZARAMOS ECHO NO TENDRIAMOS QUE ESTAR ABRIENDO Y CERRANDO -->
                                        <!-- se cierra php para poner una etiqueta HTML -->
                <tr> <!-- tr etiqueta de HTML -->
                    <?php
                        foreach ($tablas as $value){
                            $resultado = $value * $i; ?>

                            <td align="center"><?php echo $value." x  ".$i." = ".$resultado;?></td>
                            <!-- con td (etiqueta html) creamos una celda que sera la multiplicacion y el resultado en cada itinerancia -->
                            
                        <?php } ?>

                </tr>
                <?php } ?>



        </table>
                        
                            
    </body>


</html>        