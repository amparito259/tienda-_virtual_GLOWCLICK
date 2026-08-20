<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoría</title>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form action="index.php?controlador=categoria&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $categoria['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($categoria['nombre']) ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>