<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creacion de Arrays</title>
</head>
<body>
    <?php

    //Array multidimensional
    $clasesUniversidad = [0 =>[0=>"Paco", 1 =>"Lucia", 2=> "Marcos"],1 =>[0 =>"Paco", 1 =>"Pedro", 2 =>"Juan"]];
     echo "<br>";
     print_r($clasesUniversidad); 

    //Otro Array Multidimensional
    $pais =["CValenciana" => array("prov1" => "Castellon", "prov2" => "Valencia", "prov3" => "Alicante"),
             "Murcia" => array("Prov1" => "Murcia"),
             "Cataluña" => array(1 => "Girona", 2 => "Lerida")];

             echo "<br>";
             print_r($pais); 

             

     ?>
     </body>
     </html>