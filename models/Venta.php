<?php
class Venta {
    private $conn;
    private $table = "ventas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        try {
            $query = "SELECT v.*, c.nombre as cliente FROM " . $this->table . " v LEFT JOIN clientes c ON v.cliente_id = c.id ORDER BY v.fecha DESC";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch(PDOException $e) {
            echo "Error en Venta obtenerTodos: " . $e->getMessage();
        }
    }

    public function obtenerPorId($id) {
        try {
            $query = "SELECT v.*, c.nombre as cliente FROM " . $this->table . " v LEFT JOIN clientes c ON v.cliente_id = c.id WHERE v.id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$id])) {
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($resultado) {
                    return $resultado;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Venta obtenerPorId: " . $e->getMessage();
        }
    }

    public function crear($cliente_id, $total) {
        try {
            $query = "INSERT INTO " . $this->table . " (cliente_id, total) VALUES (?, ?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$cliente_id, $total])) {
                return $this->conn->lastInsertId();
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Venta crear: " . $e->getMessage();
            return false;
        }
    }
}
?>