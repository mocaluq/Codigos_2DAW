<!DOCTYPE html>
<html>
    <body>
        <?php

        //Creo el array con los productos
        $arrayProductos = array(
            0 => array('categoria' => 33, 'nombre' => 'Zapatos lala'),
            1 => array('categoria' => 24, 'nombre' => 'Pantalones lolo'),
            2 => array('categoria' => 33, 'nombre' => 'Zapatos lulu'),
            3 => array('categoria' => 23, 'nombre' => 'Camiseta lili'),
        );

        //Asigno a una variable el tamaño del array para recorrerlo en el bucle for
        $longitudArray = sizeof($arrayProductos);

        //Creo una variable para seleccionar una categoría
        $categoria = 33;
        echo "Productos de la categoria: " . $categoria;

        for ($i = 0; $i < $longitudArray; $i++) {
         $producto = $arrayProductos[$i];

        //Si la categoría es igual a la categoriaSeleccionada me la devuelve
        if ($producto['categoria'] == $categoria) {
        echo '<li>' . $producto['nombre'] . '</li>';
        }
        }
        
        ?>

    </body>
</html>