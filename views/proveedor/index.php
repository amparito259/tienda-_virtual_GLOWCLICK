<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proveedores - GLOWCLICK</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Proveedores</h1>
    <a href="index.php?controlador=proveedor&accion=crear" class="btn btn-primary">Nuevo Proveedor</a>
    <a href="index.php?controlador=producto&accion=index">Ir a Productos</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Contacto</th><th>Teléfono</th><th>Email</th><th>Acciones</th></tr>
        <?php if (!empty($proveedores)): ?>
            <?php foreach ($proveedores as $prov): ?>
            <tr>
                <td><?= $prov['id'] ?></td>
                <td><?= htmlspecialchars($prov['nombre']) ?></td>
                <td><?= htmlspecialchars($prov['contacto']) ?></td>
                <td><?= htmlspecialchars($prov['telefono']) ?></td>
                <td><?= htmlspecialchars($prov['email']) ?></td>
                <td>
                    <a href="index.php?controlador=proveedor&accion=editar&id=<?= $prov['id'] ?>">Editar</a>
                    <a href="index.php?controlador=proveedor&accion=eliminar&id=<?= $prov['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay proveedores registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>