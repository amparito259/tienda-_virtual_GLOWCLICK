<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proveedor - GLOWCLICK</title>
</head>
<body>
    <h1>Editar Proveedor</h1>
    <form action="index.php?controlador=proveedor&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $proveedor['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($proveedor['nombre']) ?>" required>
        <label>Contacto:</label>
        <input type="text" name="contacto" value="<?= htmlspecialchars($proveedor['contacto']) ?>" required>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= htmlspecialchars($proveedor['telefono']) ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($proveedor['email']) ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>