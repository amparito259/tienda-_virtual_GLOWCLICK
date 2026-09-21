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
    <a href="index.php?controlador=producto&accion=index">Ir a Productos</a>
    <table>
        <tr><th>ID</th><th>Cliente</th><th>Total</th><th>Fecha</th><th>Acciones</th></tr>
        <?php if (!empty($ventas)): ?>
            <?php foreach ($ventas as $ven): ?>
            <tr>
                <td><?= $ven['id'] ?></td>
                <td><?= htmlspecialchars($ven['cliente'] ?? 'Cliente General') ?></td>
                <td>$<?= $ven['total'] ?></td>
                <td><?= $ven['fecha'] ?></td>
                <td>
                    <a href="index.php?controlador=venta&accion=detalle&id=<?= $ven['id'] ?>">Ver Detalle</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No hay ventas registradas en GLOWCLICK.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>