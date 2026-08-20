<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form action="index.php?controlador=usuario&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        <label>Rol:</label>
        <select name="rol">
            <option value="admin">Administrador</option>
            <option value="empleado">Empleado</option>
        </select><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>