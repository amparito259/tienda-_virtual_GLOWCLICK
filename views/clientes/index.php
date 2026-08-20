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
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th></tr>
        <?php foreach ($clientes as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= htmlspecialchars($c['nombre']) ?></td>
            <td><?= htmlspecialchars($c['email']) ?></td>
            <td><?= htmlspecialchars($c['telefono']) ?></td>
            <td>
                <a href="index.php?controlador=cliente&accion=editar&id=<?= $c['id'] ?>">Editar</a>
                <a href="index.php?controlador=cliente&accion=eliminar&id=<?= $c['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>