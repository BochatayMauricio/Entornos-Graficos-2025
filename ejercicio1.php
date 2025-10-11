<?php
function doble($i) {
    return $i*2;
}
$a = TRUE; 
$b = "xyz"; 
$c = 'xyz'; 
$d = 12; 
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
} // $d = 16
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3; // $d = 17
$f = doble($d++); // $f = 34, $d = 18
$g = $f += 10; // $g = 44 $f = 44
echo $a, $b, $c, $d, $f , $g; 
?>

// VARIABLES Y TIPO
    $a es booleano 
    $b es cadena 
    $c es cadena 
    $d es entero
    $f es entero
    $g es entero

// SALIDAS
    echo gettype($a); BOOLEAN
    echo gettype($b); CADENA
    echo gettype($c); CADENA
    echo gettype($d); ENTERO
    echo $a, $b, $c, $d, $f , $g; // Salida: 1xyzxyz4444
    echo "Cadena: $a"; // Salida: Cadena: 1
// VALORES FINALES
    $a = TRUE
    $b = "xyz"
    $c = 'xyz'
    $d = 18
    $f = 44
    $g = 44

// FUNCIONES Y PARAMETROS
    doble($i) : Devuelve el doble del valor de $i
        Parámetros: $i (entero)
        Valor devuelto: (entero)
// ESTRUCTURAS DE CONTROL
    if (is_int($d)) { $d += 4; } // Si $d es entero, le suma 4
    if (is_string($a)) { echo "Cadena: $a"; } // Si $a es cadena, muestra "Cadena: 1 (PORQUE BOOLEANO COMO STRING ES 1)"
    $d = $a ? ++$d : $d*3; // Si $a es TRUE, incrementa $d en 1, si no lo multiplica por 3
