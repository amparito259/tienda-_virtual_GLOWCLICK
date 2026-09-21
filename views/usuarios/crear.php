<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario - GLOWCLICK</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form action="index.php?controlador=usuario&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <label>Rol:</label>
        <input type="text" name="rol" value="admin" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>