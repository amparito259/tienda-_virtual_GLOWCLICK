<?php
class DetalleVenta {
    private $conn;
    private $table = "detalle_ventas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerPorVenta($venta_id) {
        $query = "SELECT dv.*, p.nombre as producto FROM " . $this->table . " dv JOIN productos p ON dv.producto_id = p.id WHERE dv.venta_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$venta_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($venta_id, $producto_id, $cantidad, $precio_unitario) {
        $query = "INSERT INTO " . $this->table . " (venta_id, producto_id, cantidad, precio_unitario) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$venta_id, $producto_id, $cantidad, $precio_unitario]);
    }
}