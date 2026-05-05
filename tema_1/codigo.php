<?php
    // Esto es un comentario de una línea//
    # Esto también es un comentario

    /* 
        Este es un bloque de múltiples lineas

    */
    #Variable
    $nombre = "Juan";
    $edad = 20; 
    
    echo $nombre; // Imprime: Juan

    #Constante
    define("PI", 3.1416);
    const SALUDO = "Hola";
    echo PI; // Imprime: 3.1416

    #Arrays (Indexados)
    $frutas = ["Manzana", "Banano", "Uva"];
    echo $frutas[0];// Imprime: Manzana
    echo $frutas[2];// Imprime: Uva

    #Arrays Asociativos
    $persona = [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => "Bogotá"
    ];

    echo $persona["nombre"]; // Imprime: Ana

    #Operadores Aritméticos
    $suma = 10 + 5; // Resultado: 15
    $resta = 10 - 5; // Resultado: 5

    #Operadores de Asignación
    $x = 10;    // Asignamos 10 a $x
    $x += 5;    // Es igual a decir $x = $x + 5 (Resultado: 15)

    #Operadores de Comparación
    $esMayor = (20 > 10); // Resultado: true
    $sonIguales = (10 == 10); // Resultado: true

    #Operadores Lógicos
    $usuario = ($edad >= 18 && $tienePermiso); // && significa "Y" (ambas deben ser verdaderas)

    #Operadores de incremento/decremento
    $contador = 1;
    $contador++; // Ahora $contador vale 2
    $contador--; // Ahora $contador vuelve a valer 1
?>