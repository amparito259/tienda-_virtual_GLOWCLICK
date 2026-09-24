<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Clientes</h1>
    <a href="index.php?controlador=cliente&accion=crear" class="btn btn-primary">Nuevo Cliente</a>
    <a href="index.php?controlador=producto&accion=index">Ir a Productos</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th></tr>
        <?php if (!empty($clientes)): ?>
            <?php foreach ($clientes as $cli): ?>
            <tr>
                <td><?= $cli['id'] ?></td>
                <td><?= htmlspecialchars($cli['nombre']) ?></td>
                <td><?= htmlspecialchars($cli['email']) ?></td>
                <td><?= htmlspecialchars($cli['telefono']) ?></td>
                <td>
                    <a href="index.php?controlador=cliente&accion=editar&id=<?= $cli['id'] ?>">Editar</a>
                    <a href="index.php?controlador=cliente&accion=eliminar&id=<?= $cli['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5"></td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>