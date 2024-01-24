<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones sobre Arrays</title>
    </head>
    <body>
        <?php

        //COUNT. Esta función cuenta los elementos den un array o algo de un objeto
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;

        echo $resultado = count($a); // $resultado == 3;

        //ASORT. Ordena y mantiene la asociación de índices
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        foreach($fruits as $key => $val){
            echo "<br>";
            echo "$key = $val \n";
        }
                /*El resultado es
                    c= apple
                    b= banana
                    d= lemon
                    a= orange*/

        //SUFFLE. Mezcla un array
        $numeros = range(1,20); //range permite crear un array con una secuencia en este caso del 1 al 20
        shuffle($numeros);
        foreach($numeros as $numero){
            echo "<br> numero: $numero";
        }

        //array_merge. Combina dos o mas arrays
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        $resultado = array_merge($array1, $array2);
        echo "<br>";
        print_r($resultado);
        /* OTRA FORMA PARA LA SALIDA
        echo "<pre>";
        print_r($resultado);
        echo "</pre>";*/

        /*Resultado: Array(
                        [color] => green 
                        [0] => 2
                        [1] => 4
                        [2] => a
                        [3] => b
                        [shape] => trapezoid
                        [4] => 4
                    )*/

        /*array_merge cuando hay claves duplicadas conserva la 
        última aparición de la clave y descarta las anteriores.*/

        //Ejemplo de VAR_DUMP
        $vd = array(1, 2, array("a", "b", "c"));
        echo "<br>";
        var_dump($vd); //si lo envolvemos com <pre></pre> lo saca en diferentes lineas
                            /*echo "<pre>";
                                var_dump($vd);
                                echo "</pre>"; */

        ?>
    </body>
</html>