<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Nueva Categoría</h1>
    <form action="index.php?controlador=categoria&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>