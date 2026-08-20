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
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Rol</th><th>Acciones</th></tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= htmlspecialchars($u['nombre']) ?></td>
            <td><?= htmlspecialchars($u['email']) ?></td>
            <td><?= htmlspecialchars($u['rol']) ?></td>
            <td>
                <a href="index.php?controlador=usuario&accion=editar&id=<?= $u['id'] ?>">Editar</a>
                <a href="index.php?controlador=usuario&accion=eliminar&id=<?= $u['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>