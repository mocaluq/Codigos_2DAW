<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creacion de Arrays</title>
</head>
<body>
    <?php
    //Generar mil variables altura
    $altura1 = 164;
    $altura2 = 178;
    $altura3 = 169;
    //...
    $altura30 = 182;

    //Media de alturas
    $media = ($altura1 + $altura2 + $altura3 + $altura30) / 30;
   
    //Arrays
    $personas = array(1 => "Paco", 2=>"Manolo", 3=> "Lucia");
    $personas2 = [1 => "Paco", 2=>"Manolo", 3=> "Lucia"];
    //las claves pueden ser de dos tipos en php integer y string
    $personas3 = [1=> "Paco", "jefes" => "Manolo", 3 => "Lucia"];

    $alturasPrimero = array(164,178,169,182);
    $alturasSegundo = [164, 178,169,182];
    
    //Mostrar una posicion del array
    echo "La posicion 0 del array es: " . $alturasSegundo[0];
    echo "<br>";
    echo "La posicion 2 del array es: " . $alturasSegundo[2];
    echo "<br>";

    //Modificar el contenido de una posicion
    
    $alturasSegundo[2] = 178;
    echo "La nueva posicion 2 del array es: " . $alturasSegundo[2];
    echo "<br>";

    //Añadir un nuervo elemento
    $alturasSegundo[] = 189;
    echo "La nueva posición 4 del array es: " . $alturasSegundo[4];

    //Imprimir un nuevo elemento de un array
    echo "<br>----------------------<br>";
    print_r($alturasSegundo); //Esta funcion permite imorimir arrays completos
    echo "<br>----------------------<br>";

    //Eliminar un elemento
    unset($alturasSegundo[2]);
    echo "<br>";
    echo "La nueva posicion 3 del array es: " . $alturasSegundo[3];
   
   ?>
</body>
</html>