<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Productos</h1>
  
    <table>
        <tr><th>id_producto</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>id_Categoría</th><th>id_proveedor</th></tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $prod): ?>
            <tr>
                <td><?= $prod['id_producto'] ?></td>
                <td><?= $prod['nombre'] ?></td>
                <td>$<?= $prod['precio'] ?></td>
                <td><?= $prod['stock'] ?></td>
                <td><?= $prod['id_categoria'] ?></td>
                <td><?= $prod['id_proveedor'] ?></td>
               
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay productos disponibles en GLOWCLICK.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>