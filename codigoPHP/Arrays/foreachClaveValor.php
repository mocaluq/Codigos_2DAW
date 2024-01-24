<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo sobre Foreach-Clave-Valor</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <ul>
    <?php
    $menu=[
        "home" => "Home",
        "Nosotros",
        "Productos",
        "Contactar",
        "submenu"=>[
        "titulo"=>"titulo 2 nivel",
        "contenido"=>"Contenido de segundo nivel"]
    ];
    
    foreach ($menu as $clave => $valor) {
        if(strcmp($clave,"submenu")==0){
            foreach ($valor as $clave2 => $valor2) {
                echo "La clave2 es: ".$clave2." y el valor2: ".$valor2."<br>";

            }

        }else{
            echo "La clave es: ".$clave." y el valor: ".$valor."<br>";
        }
    }

    ?>
    <ul>
  </body>
</html>