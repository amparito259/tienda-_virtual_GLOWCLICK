<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario - GLOWCLICK</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="index.php?controlador=usuario&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>
        <label>Rol:</label>
        <input type="text" name="rol" value="<?= htmlspecialchars($usuario['rol']) ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>