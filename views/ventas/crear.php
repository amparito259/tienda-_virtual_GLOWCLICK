<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Venta - GLOWCLICK</title>
</head>
<body>
    <h1>Nueva Venta</h1>
    <form action="index.php?controlador=venta&accion=crear" method="POST">
        <label>Cliente ID:</label>
        <input type="number" name="cliente_id" required>
        <label>Total:</label>
        <input type="number" step="0.01" name="total" required>
        <button type="submit">Registrar Venta</button>
    </form>
</body>
</html>