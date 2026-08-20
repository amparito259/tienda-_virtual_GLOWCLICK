<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="index.php?controlador=usuario&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required><br>
        <label>Rol:</label>
        <select name="rol">
            <option value="admin" <?= ($usuario['rol'] == 'admin') ? 'selected' : '' ?>>Administrador</option>
            <option value="empleado" <?= ($usuario['rol'] == 'empleado') ? 'selected' : '' ?>>Empleado</option>
        </select><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>