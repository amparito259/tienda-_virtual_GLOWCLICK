<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto - GLOWCLICK</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form action="index.php?controlador=producto&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
        <label>Stock:</label>
        <input type="number" name="stock" required>
        <label>Categoría ID:</label>
        <input type="number" name="categoria_id" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>