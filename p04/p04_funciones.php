<?php
function esMultiploDe5y7($numero) {
    return ($numero % 5 == 0) && ($numero % 7 == 0);
}

function generarSecuenciaDeseada() {
    $secuenciaDeseada = array(1, 0, 1); // 1 representa impar, 0 representa par
    $matriz = array();
    $iteraciones = 0;

    while (count($matriz) < 12) {
        $fila = array();

        // Genera 3 números aleatorios e inserta en la fila
        for ($i = 0; $i < 3; $i++) {
            $numero = rand(1, 999); // Genera números entre 1 y 999
            $fila[] = $numero;
        }

        // Comprueba si la fila sigue el patrón "impar, par, impar"
        if ($fila[0] % 2 == 1 && $fila[1] % 2 == 0 && $fila[2] % 2 == 1) {
            // Si cumple el patrón, agrega la fila a la matriz
            $matriz[] = $fila;
        }

        $iteraciones++;
    }

    // Devuelve las secuencias generadas, el número de iteraciones y la cantidad de números generados
    return array(
        'matriz' => $matriz,
        'iteraciones' => $iteraciones,
        'cantidad_numeros' => $iteraciones * 3
    );
}

function encontrarPrimerMultiplo($numeroBuscado) {
    $primerMultiplo = null;
    $intentos = 0;

    while ($primerMultiplo === null) {
        $numeroAleatorio = rand(1, 1000); // Genera un número aleatorio entre 1 y 1000
        $intentos++;

        if ($numeroAleatorio % $numeroBuscado === 0) {
            $primerMultiplo = $numeroAleatorio;
        }
    }

    return array(
        'primer_multiplo' => $primerMultiplo,
        'intentos' => $intentos
    );
}

function generarArregloLetras() {
    $arregloLetras = array();

    for ($i = 97; $i <= 122; $i++) {
        $letra = chr($i);
        $arregloLetras[$i] = $letra;
    }

    return $arregloLetras;
}
?>

