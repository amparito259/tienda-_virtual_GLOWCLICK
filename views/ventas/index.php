<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Ventas</h1>
    <a href="index.php?controlador=venta&accion=crear" class="btn btn-primary">Nueva Venta</a>
    <table>
        <tr><th>ID</th><th>Cliente</th><th>Fecha</th><th>Total</th><th>Acciones</th></tr>
        <?php foreach ($ventas as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= htmlspecialchars($v['cliente'] ?? 'Anónimo') ?></td>
            <td><?= $v['fecha'] ?></td>
            <td>$<?= number_format($v['total'], 2) ?></td>
            <td>
                <a href="index.php?controlador=venta&accion=detalle&id=<?= $v['id'] ?>">Ver Detalle</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>