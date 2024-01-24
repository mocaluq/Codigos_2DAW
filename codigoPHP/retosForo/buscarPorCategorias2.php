<!DOCTYPE html>
<html>
    <body>
        <?php

        $arrayProductos = array(
            0 => array('categoria' => 33, 'nombre' => 'Zapatos lala'),
            1 => array('categoria' => 24, 'nombre' => 'Pantalones lolo'),
            2 => array('categoria' => 33, 'nombre' => 'Zapatos lulu'),
            3 => array('categoria' => 23, 'nombre' => 'Camiseta lili'),
        );

        $categoriaSeleccionada = 33;

        echo "Productos de la categoria: " . $categoriaSeleccionada;
        echo '<ul>'; //si queremos que la lista ordenada este dentro de una desordenada
            foreach ($arrayProductos as $producto) {
            if ($producto['categoria'] == $categoriaSeleccionada) {
        echo '<li>' . $producto['nombre'] . '</li>';
            }
            }
        echo '</ul>';
        ?>

    </body>
</html>