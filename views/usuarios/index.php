<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Usuarios</h1>
    <a href="index.php?controlador=usuario&accion=crear" class="btn btn-primary">Nuevo Usuario</a>
    <a href="index.php?controlador=producto&accion=index">Ir a Productos</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Rol</th><th>Acciones</th></tr>
        <?php if (!empty($usuarios)): ?>
            <?php foreach ($usuarios as $usu): ?>
            <tr>
                <td><?= $usu['id'] ?></td>
                <td><?= htmlspecialchars($usu['nombre']) ?></td>
                <td><?= htmlspecialchars($usu['email']) ?></td>
                <td><?= htmlspecialchars($usu['rol']) ?></td>
                <td>
                    <a href="index.php?controlador=usuario&accion=editar&id=<?= $usu['id'] ?>">Editar</a>
                    <a href="index.php?controlador=usuario&accion=eliminar&id=<?= $usu['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No hay usuarios registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>