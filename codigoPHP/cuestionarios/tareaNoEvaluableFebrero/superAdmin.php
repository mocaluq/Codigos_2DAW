<?php
if(isset($_POST["area"]) && $_POST["area"]=="Alumnado y Padres"){
    header("Location: usuarioSinPrivilegio.php");
}
else if(isset($_POST["area"]) && $_POST["area"]=="Administración"){
    header("Location: usuarioAdministrador.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super Admin</title>
</head>
<body>
    <form action="superAdmin.php    " method="post">
        <h1>¿A qué área vamos?</h1><br>
        <input type="submit" value="Alumnado y Padres" name="area">
        <input type="submit" value="Administración" name="area">
    </form>
</body>
</html>