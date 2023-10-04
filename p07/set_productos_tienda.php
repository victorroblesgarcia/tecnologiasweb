<!DOCTYPE html>
<html>
<head>
    <title>Tienda Online</title>
</head>
<body>
    <h1>Formulario de Producto</h1>
    <form id="productoForm" method="post">
        <label for="nombre">Nombre de Producto:</label>
        <input type="text" id="nombre" name="nombre" required maxlength="100"><br><br>

        <label for="marca">Marca:</label>
        <select id="marca" name="marca" required>
            <option value="">Selecciona una marca</option>
            <option value="Marca1">Marca 1</option>
            <option value="Marca2">Marca 2</option>
            <option value="Marca3">Marca 3</option>
        </select><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo"  maxlength="25"><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required min="99.99"><br><br>

        <label for="detalles">Detalles:</label>
        <textarea id="detalles" name="detalles" maxlength="250"></textarea><br><br>

        <label for="unidades">Unidades:</label>
        <input type="number" id="unidades" name="unidades" required min="0"><br><br>

        <label for="imagen">Imagen:</label>
        <input type="text" id="imagen" name="imagen" accept="image/*" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <script>
        document.getElementById('productoForm').addEventListener('submit', function (e) {
            var nombre = document.getElementById('nombre').value;
            var marca = document.getElementById('marca').value;
            var modelo = document.getElementById('modelo').value;
            var precio = parseFloat(document.getElementById('precio').value);
            var detalles = document.getElementById('detalles').value;
            var unidades = parseInt(document.getElementById('unidades').value);

            // Validaciones
            var errores = [];

            if (!nombre || nombre.length > 100) {
                errores.push("El nombre debe ser requerido y tener 100 caracteres o menos.");
            }

            if (!marca) {
                errores.push("La marca debe ser requerida y seleccionarse de la lista de opciones.");
            }

            if (!modelo || modelo.length > 25 || !/^[a-zA-Z0-9]+$/.test(modelo)) {
                errores.push("El modelo debe ser requerido, texto alfanumérico y tener 25 caracteres o menos.");
            }

            if (isNaN(precio) || precio <= 99.99) {
                errores.push("El precio debe ser requerido y mayor a 99.99.");
            }

            if (detalles.length > 250) {
                errores.push("Los detalles deben tener como máximo 250 caracteres.");
            }

            if (isNaN(unidades) || unidades < 0) {
                errores.push("Las unidades deben ser requeridas y el número registrado debe ser mayor o igual a 0.");
            }
             // Si la ruta de la imagen está vacía, usa una imagen por defecto
             if (!imagen) {
                imagen = 'img/cat.png';
            }

            if (errores.length > 0) {
                e.preventDefault(); // Evita que el formulario se envíe
                alert("Por favor, corrige los siguientes errores:\n" + errores.join("\n"));
            }
        });
    </script>
</body>
</html>