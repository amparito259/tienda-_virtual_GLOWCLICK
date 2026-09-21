<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Productos</h1>
    <a href="index.php?controlador=producto&accion=crear" class="btn btn-primary">Nuevo Producto</a>
    <a href="index.php?controlador=categoria&accion=index">Ir a Categorías</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Categoría</th><th>Acciones</th></tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $prod): ?>
            <tr>
                <td><?= $prod['id'] ?></td>
                <td><?= htmlspecialchars($prod['nombre']) ?></td>
                <td>$<?= $prod['precio'] ?></td>
                <td><?= $prod['stock'] ?></td>
                <td><?= htmlspecialchars($prod['categoria'] ?? 'Sin categoría') ?></td>
                <td>
                    <a href="index.php?controlador=producto&accion=editar&id=<?= $prod['id'] ?>">Editar</a>
                    <a href="index.php?controlador=producto&accion=eliminar&id=<?= $prod['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay productos disponibles en GLOWCLICK.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>