<?php

session_start();

if (isset($_POST["usuario"]) && isset($_POST["contraseña"]) && !empty($_POST["usuario"]) && !empty($_POST["contraseña"])) {
    
    if ($_POST["usuario"] == "imanol" && $_POST["contraseña"] == "1234"){
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: usuarioAdministrador.php");
        exit();
    }
    else if($_POST["usuario"] == "paco" && $_POST["contraseña"] == "abcd"){
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: usuarioSinPrivilegio.php");
        exit();
    }
    else if($_POST["usuario"] == "elisa" && $_POST["contraseña"] == "elisa123"){
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: superAdmin.php");
        exit();
    }

} else {
    echo '<span style="color: red;">Introduce un usuario y contraseña válidos</span>';
}

?>