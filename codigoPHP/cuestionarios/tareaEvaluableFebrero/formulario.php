<?php

$id =time();

if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && !is_numeric($_POST["nombre"])) {
    echo "Hola " . $_POST["nombre"];
    setcookie($id, $_POST['nombre'], time() + (48 * 60 * 60), "/");

    /*OTRA FORMA DE GENERAR COOKIES SIN QUE SE SOBREESCRIBAN SERÍA CREANDO NOMBRES UNICOS CON LA 
    FUNCION UNIQUID() QUE GENERA IDENTIFICADORES ÚNICOS */
    //$cookie_name = "usuario:" . uniqid();
    //setcookie($cookie_name, $_POST['nombre'], time() + (60 * 60), "/");

} else {
    echo '<span style="color: red;">Introduce un nombre</span>';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar Cookies</title>
    </head>
    <body>
        <form action="eliminarCookies.php" method="post">
        <input type="submit" value="Eliminar Cookies">
        </form>
    </body>
</html>
