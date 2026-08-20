<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Categorías</h1>
    <a href="index.php?controlador=categoria&accion=crear" class="btn btn-primary">Nueva Categoría</a>
    <a href="index.php?controlador=producto&accion=index">Ir a Productos</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>
        <?php foreach ($categorias as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= htmlspecialchars($cat['nombre']) ?></td>
            <td>
                <a href="index.php?controlador=categoria&accion=editar&id=<?= $cat['id'] ?>">Editar</a>
                <a href="index.php?controlador=categoria&accion=eliminar&id=<?= $cat['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>