<!DOCTYPE html>
<html>
    <body>
        <?php
        $edad = array("Pedro"=>"25", "Ale"=>"37", "Sara"=>"23");

        foreach($edad as $x => $x_valor){
            echo "clave=" . $x . ", valor=" . $x_valor;
            echo "<br>";
        }
        ?>

    </body>
</html>