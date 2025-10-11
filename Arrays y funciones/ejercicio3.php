<?php
    $fun = getdate();
    echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
    segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
// SALIDA: Has entrado en esta pagina a las 14 horas, con 30 minutos y 15 segundos, del 5/6/2024

//b
<?php
function sumar($sumando1,$sumando2){
    $suma=$sumando1+$sumando2;
    echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
// SALIDA: 5+6=11