<?php
include("p04_funciones.php");

// Ejercicio 1 - Comprobar si un número es múltiplo de 5 y 7
if (isset($_GET['numero'])) {
    $num = $_GET['numero'];
    if (esMultiploDe5y7($num)) {
        echo '<h2>Ejercicio 1</h2>';
        echo '<h3>R= El número ' . $num . ' SÍ es múltiplo de 5 y 7.</h3>';
    } else {
        echo '<h2>Ejercicio 1</h2>';
        echo '<h3>R= El número ' . $num . ' NO es múltiplo de 5 y 7.</h3>';
    }
}

// Ejercicio 2 - Generar secuencia
$resultado = generarSecuenciaDeseada();
$matriz = $resultado['matriz'];
$iteraciones = $resultado['iteraciones'];
$cantidad_numeros = $resultado['cantidad_numeros'];

// Ejercicio 3 - Encontrar el primer múltiplo de un número dado usando ciclo while
if (isset($_GET['numero_buscado'])) {
    $numeroBuscado = intval($_GET['numero_buscado']);
    $resultadoPrimerMultiplo = encontrarPrimerMultiplo($numeroBuscado);
    $primerMultiplo = $resultadoPrimerMultiplo['primer_multiplo'];
    $intentos = $resultadoPrimerMultiplo['intentos'];  
}
//Ejercicio 4
$arregloLetras = generarArregloLetras();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>

<h2>Ejercicio 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
impar, par, impar</p>
<p>Generación de secuencia compuesta por impar, par, impar:</p>
    
    <?php
    foreach ($matriz as $fila) {
        echo implode(", ", $fila) . "<br>";
    }
    ?>

    <p>Número de iteraciones: <?php echo $iteraciones; ?></p>
    <p>Cantidad de números generados: <?php echo $cantidad_numeros; ?></p>
    <h2>Ejercicio 3  (Ciclo While)</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, 
        pero que además sea múltiplo de un número dado.</p>
        <?php
        // Ejercicio 3 - Encontrar el primer múltiplo de un número dado usando ciclo while
if (isset($_GET['numero_buscado'])) {
    $numeroBuscado = intval($_GET['numero_buscado']);
    $resultadoPrimerMultiplo = encontrarPrimerMultiplo($numeroBuscado);
    $primerMultiplo = $resultadoPrimerMultiplo['primer_multiplo'];
    $intentos = $resultadoPrimerMultiplo['intentos'];

    
    if ($primerMultiplo !== null) {
        echo '<p>Primer múltiplo de ' . $numeroBuscado . ' obtenido aleatoriamente: ' . $primerMultiplo . '</p>';
        echo '<p>Intentos necesarios: ' . $intentos . '</p>';
    } else {
        echo '<p>No se encontró un múltiplo de ' . $numeroBuscado . ' en los primeros 1000 intentos.</p>';
    }
}
?>
 <h2>Ejercicio 4</h2>
 <table border="1">
        <tr>
            <th>Índice</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($arregloLetras as $indice => $valor): ?>
        <tr>
            <td><?php echo $indice; ?></td>
            <td><?php echo $valor; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>