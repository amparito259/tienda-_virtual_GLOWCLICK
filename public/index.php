<?php
require_once "../config/database.php";

$db = new Database();
$conexion = $db->conectar();

if ($conexion) {
    echo "Conexión exitosa a la base de datos de GLOWCLICK";
}
?>