<html>
    <head><title>Documento 1</title></head>
    <body>
    <?php
        echo "<table width = 90% border = '1' >";
        $row = 5;
        $col = 2;
        for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
        } echo "</tr>\n";
        }
        echo "</table>\n";
    ?>
    </body>
</html>
// este codigo se utiliza para crear una tabla de 5 filas y 2 columnas con bordes en HTML
// la tabla ocupa el 90% del ancho de la pagina y cada celda tiene un espacio en blanco (&nbsp;)
// se utiliza un bucle for para crear las filas y otro bucle for anidado para crear las columnas dentro de cada fila
// el resultado es una tabla vacia con 5 filas y 2 columnas


<html>
    <head><title>Documento 2</title></head>
    <body>
    <?php
        if (!isset($_POST['submit'])) {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
            </form>
        <?php
    }
        else {
        $age = $_POST['age'];
        if ($age >= 21) {
        echo 'Mayor de edad';
        }
        else {
        echo 'Menor de edad';
        }
        }
    ?>
    </body>
</html>
// este codigo crea un formulario HTML que solicita la edad del usuario
// si el formulario no ha sido enviado, se muestra el formulario con un campo de entrada para la edad y un boton de envio
// cuando el formulario es enviado, se verifica si la edad ingresada es mayor o igual a 21
// si es asi, se muestra el mensaje "Mayor de edad", de lo contrario se muestra "Menor de edad"

