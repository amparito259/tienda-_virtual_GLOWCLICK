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
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Categoría</th><th>Acciones</th></tr>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td>$<?= number_format($p['precio'], 2) ?></td>
            <td><?= $p['stock'] ?></td>
            <td><?= htmlspecialchars($p['categoria'] ?? 'Sin Categoría') ?></td>
            <td>
                <a href="index.php?controlador=producto&accion=editar&id=<?= $p['id'] ?>">Editar</a>
                <a href="index.php?controlador=producto&accion=eliminar&id=<?= $p['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>