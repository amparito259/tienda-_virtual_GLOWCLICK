<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form action="index.php?controlador=producto&accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label>Stock:</label>
        <input type="number" name="stock" required><br>
        <label>Categoría:</label>
        <select name="categoria_id">
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['nombre']) ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>