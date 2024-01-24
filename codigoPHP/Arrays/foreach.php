<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo sobre Foreach</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <ul>
    <?php
    $menu=[
        "home" => "Home",
        "Nosotros",
        "Productos",
        "Contactar"
    ];
    
    foreach ($menu as $valor) {
        echo "<li class=\"menu\">".$valor."</li>";
    }

    ?>
    <ul>
  </body>
</html>