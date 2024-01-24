<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Estructura For con HTML</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <ul>
            <?php

            for($i = 1; $i <6 ; $i++){
                echo "<li class=\"menu\">".$i."</li>";
            }
            ?>
            
        </ul>
    </body>
</html