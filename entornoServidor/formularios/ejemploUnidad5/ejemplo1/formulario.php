<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recogida de información</title>
  </head>
  <body>
    <?php
    // Verifica si se ha enviado el formulario y si el campo "nombre" está seteado y no está vacío
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
      echo "La información recibida es:<br>";

      print_r($_POST); // Imprime todos los campos del formulario
      
      echo "<br>El nombre recibido es: " . $_POST["nombre"]; // Imprime el valor del campo "nombre"
    } else {
      echo "No se ha recibido información o el campo 'nombre' está vacío.";
    }
    ?>
  </body>
</html>
