<?php

//Eliminar cookies
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', time() - 3600, '/');
}
// Redirigir al formulario inicial
header("Location: formulario.html");
exit;

?>