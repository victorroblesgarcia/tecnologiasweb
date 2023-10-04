<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    if ($sexo == "femenino" && $edad >= 18 && $edad <= 35) {
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<mensaje>';
        echo 'Bienvenida, usted está en el rango de edad permitido.';
        echo '</mensaje>';
    } else {
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<mensaje>';
        echo 'Lo sentimos, no cumple con los criterios de edad y sexo permitidos.';
        echo '</mensaje>';
    }
}
?>
