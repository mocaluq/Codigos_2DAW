<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones con Strings</title>
  </head>
  <body>
    <?php
    $frase="  Prueba de Frase  ";
    $fraseSinEspacios=ltrim($frase); //ltrim retira espacios en blanco u otros caracteres del inicio de un string
    echo "--".$frase."--";
    echo "<br>--".$fraseSinEspacios."--";
    echo "<br> tamaño de la frase: ".strlen($frase); //strlen marca el tamaño de la frase
     ?>
  </body>
</html>