<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h3>Modificar Producto</h3>
    <?php
    // Verificar si se ha proporcionado un ID de producto válido en la URL
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        echo "<p>ID de producto no válido.</p>";
    } else {
        $id = $_GET['id'];

        // Conectar a la base de datos
        $link = new mysqli('localhost', 'root', '123456a', 'marketzone');

        // Verificar la conexión
        if ($link->connect_errno) {
            die('Falló la conexión: ' . $link->connect_error);
        }

        // Consulta SQL para obtener los detalles del producto con el ID $id
        $query = "SELECT * FROM productos WHERE id = $id";

        // Ejecutar la consulta
        $result = $link->query($query);

        // Verificar si se encontró el producto
        if ($result && $result->num_rows > 0) {
            $producto = $result->fetch_assoc();
    ?>
            <form action="actualizar_producto_v2.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>"><br>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" value="<?php echo $producto['marca']; ?>"><br>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value="<?php echo $producto['modelo']; ?>"><br>
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" value="<?php echo $producto['precio']; ?>"><br>
                <label for="unidades">Unidades:</label>
                <input type="text" name="unidades" id="unidades" value="<?php echo $producto['unidades']; ?>"><br>
                <label for="detalles">Detalles:</label>
                <input type="text" name="detalles" id="detalles" value="<?php echo $producto['detalles']; ?>"><br>
                <label for="imagen">Imagen:</label>
                <input type="text" name="imagen" id="imagen" value="<?php echo $producto['imagen']; ?>"><br>
                <input type="submit" value="Guardar Cambios">
            </form>
    <?php
        } else {
            echo "<p>No se encontró el producto.</p>";
        }

        // Cerrar la conexion
        $link->close();
    }
    ?>
</body>
</html>
