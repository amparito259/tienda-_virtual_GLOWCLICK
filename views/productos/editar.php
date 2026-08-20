<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="index.php?controlador=producto&accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
        <label>Stock:</label>
        <input type="number" name="stock" value="<?= $producto['stock'] ?>" required><br>
        <label>Categoría:</label>
        <select name="categoria_id">
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat['id'] ?>" <?= ($cat['id'] == $producto['categoria_id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($cat['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>