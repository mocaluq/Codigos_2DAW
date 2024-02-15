<?php

session_start();

echo "<p style=\"color:goldenrod\"> <b>AREA DE ALUMNADO Y PADRES </p>";

if (isset($_SESSION["usuario"])) {
    echo "Bienvenido " . $_SESSION["usuario"];
} else {
    // Manejar el caso en que no se haya iniciado sesión
    echo "Debe iniciar sesión primero";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario sin privilegios</title>
</head>
<body>
    <form method="post" action="cerrarSesion.php">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>