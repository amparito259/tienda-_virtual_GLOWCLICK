<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Venta</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Detalle de Venta #<?= $venta['id'] ?></h1>
    <p><strong>Cliente:</strong> <?= htmlspecialchars($venta['cliente']) ?></p>
    <p><strong>Fecha:</strong> <?= $venta['fecha'] ?></p>
    <p><strong>Total:</strong> $<?= number_format($venta['total'], 2) ?></p>

    <h3>Productos Vendidos</h3>
    <table>
        <tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Subtotal</th></tr>
        <?php foreach ($detalles as $d): ?>
        <tr>
            <td><?= htmlspecialchars($d['producto']) ?></td>
            <td><?= $d['cantidad'] ?></td>
            <td>$<?= number_format($d['precio_unitario'], 2) ?></td>
            <td>$<?= number_format($d['cantidad'] * $d['precio_unitario'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php?controlador=venta&accion=index">Volver</a>
</body>
</html>