<?php
// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $link = new mysqli('localhost', 'root', '123456a', 'marketzone');

    // Verificar la conexión
    if ($link->connect_errno) {
        die('Falló la conexión: ' . $link->connect_error);
    }

    // Recuperar los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $unidades = $_POST['unidades'];
    $detalles = $_POST['detalles'];
    $imagen = $_POST['imagen'];


    // Preparar una consulta SQL para actualizar el producto
    $query = "UPDATE productos SET nombre = ?, marca = ?, modelo = ?, precio = ?, unidades = ?, detalles = ?, imagen = ? WHERE id = ?";

    // Preparar una sentencia
    if ($stmt = $link->prepare($query)) {
        // Vincular los parámetros
        $stmt->bind_param("sssssssi", $nombre, $marca, $modelo, $precio, $unidades, $detalles, $imagen,  $id);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            // La actualización se realizó con éxito, puedes redirigir al usuario a la página de listado
            header("Location: http://localhost:81/tecnologiasweb/practicas/p07/get_productos_vigentes_v2.php");
            exit;
        } else {
            echo "Error al actualizar el producto: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $link->error;
    }

    // Cerrar la conexión
    $link->close();
} else {
    // Si el formulario no se envió por el método POST, redirigir a la página de edición
    header("Location: formulario_productos_v2.php?id=" . $_POST['id']);
    exit;
}
?>
