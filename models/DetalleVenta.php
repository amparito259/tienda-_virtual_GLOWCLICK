<?php
class DetalleVenta {
    private $conn;
    private $table = "detalle_ventas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerPorVenta($venta_id) {
        try {
            $query = "SELECT dv.*, p.nombre as producto FROM " . $this->table . " dv JOIN productos p ON dv.producto_id = p.id WHERE dv.venta_id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$venta_id])) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch(PDOException $e) {
            echo "Error en DetalleVenta obtenerPorVenta: " . $e->getMessage();
        }
    }

    public function crear($venta_id, $producto_id, $cantidad, $precio_unitario) {
        try {
            $query = "INSERT INTO " . $this->table . " (venta_id, producto_id, cantidad, precio_unitario) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$venta_id, $producto_id, $cantidad, $precio_unitario])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en DetalleVenta crear: " . $e->getMessage();
            return false;
        }
    }
}
?>