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
            <form action="actualizar_producto_v2.php" method="POST" onsubmit="return validarFormulario();">
                <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>"><br>
                <span id="nombreError" class="text-danger"></span><br>
                
                <label for="marca">Marca:</label>
                <select name="marca" id="marca">
                    <option value="" selected disabled>Seleccione una marca</option>
                    <option value="Nick-ATLA" <?php if ($producto['marca'] == 'Nick-ATLA') echo 'selected'; ?>>Nick-ATLA</option>
                    <option value="Merch-Avatar" <?php if ($producto['marca'] == 'Merch-Avatar') echo 'selected'; ?>>Merch-Avatar</option>
                    <option value="Mex-Accesor" <?php if ($producto['marca'] == 'Mex-Accesor') echo 'selected'; ?>>Mex-Accesor</option>
                </select><br>
                <span id="marcaError" class="text-danger"></span><br>
                
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value="<?php echo $producto['modelo']; ?>"><br>
                <span id="modeloError" class="text-danger"></span><br>
                
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" value="<?php echo $producto['precio']; ?>"><br>
                <span id="precioError" class="text-danger"></span><br>
                
                <label for="unidades">Unidades:</label>
                <input type="text" name="unidades" id="unidades" value="<?php echo $producto['unidades']; ?>"><br>
                <span id="unidadesError" class="text-danger"></span><br>
                
                <label for="detalles">Detalles:</label>
                <input type="text" name="detalles" id="detalles" value="<?php echo $producto['detalles']; ?>"><br>
                <span id="detallesError" class="text-danger"></span><br>
                
                <label for="imagen">Imagen:</label>
                <input type="text" name="imagen" id="imagen" value="<?php echo $producto['imagen']; ?>"><br>
                <span id="imagenError" class="text-danger"></span><br>
                
                <input type="submit" value="Guardar Cambios">
            </form>
    <?php
        } else {
            echo "<p>No se encontró el producto.</p>";
        }

        // Cerrar la conexión
        $link->close();
    }
    ?>
    
    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var marca = document.getElementById("marca").value;
            var modelo = document.getElementById("modelo").value;
            var precio = parseFloat(document.getElementById("precio").value);
            var unidades = parseInt(document.getElementById("unidades").value);
            var detalles = document.getElementById("detalles").value;
            var imagen = document.getElementById("imagen").value;

            // Inicializar los mensajes de error
            document.getElementById("nombreError").textContent = "";
            document.getElementById("marcaError").textContent = "";
            document.getElementById("modeloError").textContent = "";
            document.getElementById("precioError").textContent = "";
            document.getElementById("unidadesError").textContent = "";
            document.getElementById("detallesError").textContent = "";
            document.getElementById("imagenError").textContent = "";

            // Validar nombre
            if (nombre === "") {
                document.getElementById("nombreError").textContent = "El nombre es requerido.";
                return false;
            }
            if (nombre.length > 100) {
                document.getElementById("nombreError").textContent = "El nombre debe tener 100 caracteres o menos.";
                return false;
            }

            // Validar marca
            if (marca === "") {
                document.getElementById("marcaError").textContent = "La marca es requerida.";
                return false;
            }

            // Validar modelo
            if (modelo === "") {
                document.getElementById("modeloError").textContent = "El modelo es requerido.";
                return false;
            }
            if (modelo.length > 25) {
                document.getElementById("modeloError").textContent = "El modelo debe tener 25 caracteres o menos.";
                return false;
            }

            // Validar precio
            if (isNaN(precio) || precio <= 99.99) {
                document.getElementById("precioError").textContent = "El precio debe ser mayor a 99.99.";
                return false;
            }

            // Validar unidades
            if (isNaN(unidades) || unidades < 0) {
                document.getElementById("unidadesError").textContent = "Las unidades deben ser un número mayor o igual a 0.";
                return false;
            }

            // Validar detalles
            if (detalles.length > 250) {
                document.getElementById("detallesError").textContent = "Los detalles deben tener 250 caracteres o menos.";
                return false;
            }

             // Validar imagen opcional
            if (imagen === "") {
             // Usar la ruta de imagen por defecto si no se proporciona una
                document.getElementById("imagen").value = "img/logo.png";
    }

    return true;

            return true;
        }
    </script>
</body>
</html>
