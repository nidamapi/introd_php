<?php

// Ejercicio 2: Mostrar los numeros del 1 al 100, usando la instrucción for y una array indexado.

$numeros = [];
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}

?>