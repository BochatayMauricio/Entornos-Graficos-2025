// apartado a
<?php
    $i = 1;
    while ($i <= 10) {
        print $i++;
    }
    // Salida: 2345678910
?>
<?php
    $i = 1;
    while ($i <= 10):
    print $i;
    $i++;
    endwhile;
    // Salida: 12345678910
?>
<?php
    $i = 0;
    do {
    print ++$i;
    } while ($i<10);
    // Salida: 12345678910
?>
// No son equivalentes


// apartado b
<?php
    for ($i = 1; $i <= 10; $i++) {
    print $i;
    }
    // Salida: 12345678910
?>
<?php
    for ($i = 1; ;$i++) {
        if ($i > 10) {
            break;
        }
        print $i;
    }
    // Salida: 12345678910
?>
<?php
    $i = 1;
    for (;;) {
    if ($i > 10) {
    break;
    }
    print $i;
    $i++;
    }
    // Salida: 12345678910
?>
<?php
    for ($i = 1; $i <= 10; print $i, $i++) ;
    // Salida: 12345678910
?>
// Son equivalentes

// apartado c
<?php
if ($i == 0) {
 print "i equals 0"; 
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}

?>
<?php

switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
?>
// Son equivalentes