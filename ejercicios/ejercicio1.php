<?php

/*Ejercicio 1:
Ingresar el tiempo de duración de una llamada telefónica y determinar la cantidad a pagar, de acuerdo con lo siguiente:
a. Toda llamada que dure tres minutos o menos tienen un costo de $300.
b. Cada minuto adicional cuesta $50.*/

$tiempo = 5; // Duración en minutos
$costo = 0;

if ($tiempo <= 3) {
    $costo = 300;
}
    else
    {
    // 300 de los primeros 3 min + (minutos extras * 50)
    $minutos_adicionales = $tiempo - 3;
    $costo =  300 + ($minutos_adicionales * 50);
}

echo "El tiempo de la llamada fue: $tiempo min. <br> Total a pagar: $" . $costo;
?>