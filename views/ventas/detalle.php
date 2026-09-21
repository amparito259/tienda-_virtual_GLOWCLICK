<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Venta - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Detalle de la Venta</h1>
    <a href="index.php?controlador=venta&accion=index">Volver a Ventas</a>
    <table>
        <tr><th>ID Detalle</th><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th></tr>
        <?php if (!empty($detalles)): ?>
            <?php foreach ($detalles as $det): ?>
            <tr>
                <td><?= $det['id'] ?></td>
                <td><?= htmlspecialchars($det['producto']) ?></td>
                <td><?= $det['cantidad'] ?></td>
                <td>$<?= $det['precio_unitario'] ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay detalles para esta venta.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>