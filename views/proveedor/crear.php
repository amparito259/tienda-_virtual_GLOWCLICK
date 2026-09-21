<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proveedor - GLOWCLICK</title>
</head>
<body>
    <h1>Nuevo Proveedor</h1>
    <form action="index.php?controlador=proveedor&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Contacto:</label>
        <input type="text" name="contacto" required>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>