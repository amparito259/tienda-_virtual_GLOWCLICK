<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="index.php?controlador=cliente&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($cliente['nombre']) ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= htmlspecialchars($cliente['telefono']) ?>"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>