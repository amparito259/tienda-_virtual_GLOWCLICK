<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - GLOWCLICK</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="index.php?controlador=producto&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required>
        <label>Stock:</label>
        <input type="number" name="stock" value="<?= $producto['stock'] ?>" required>
        <label>Categoría ID:</label>
        <input type="number" name="categoria_id" value="<?= $producto['categoria_id'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>