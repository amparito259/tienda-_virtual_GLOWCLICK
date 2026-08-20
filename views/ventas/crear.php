<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Venta</title>
</head>
<body>
    <h1>Nueva Venta</h1>
    <form action="index.php?controlador=venta&accion=crear" method="POST">
        <label>Cliente:</label>
        <select name="cliente_id" required>
            <?php foreach ($clientes as $c): ?>
                <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['nombre']) ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Producto:</label>
        <select name="producto_id" required>
            <?php foreach ($productos as $p): ?>
                <option value="<?= $p['id'] ?>"><?= htmlspecialchars($p['nombre']) ?> - $<?= $p['precio'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad" value="1" min="1" required><br>
        <button type="submit">Procesar Venta</button>
    </form>
</body>
</html>