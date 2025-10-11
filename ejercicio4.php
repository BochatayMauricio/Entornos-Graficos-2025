<?php
$color = 'blanco';
$flor = 'clavel';
?>

<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>

// la primera salida no muestra nada porque la variable $color se define despues de la primera salida
// la segunda salida muestra " El clavel blanco" porque las variables $flor y $color se definen en el archivo datos.php que se incluye antes de la segunda salida
// la salida completa es "El  El clavel blanco"

