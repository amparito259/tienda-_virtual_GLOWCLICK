<?php
class Venta {
    private $conn;
    private $table = "ventas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        $query = "SELECT v.*, c.nombre as cliente FROM " . $this->table . " v LEFT JOIN clientes c ON v.cliente_id = c.id ORDER BY v.fecha DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $query = "SELECT v.*, c.nombre as cliente FROM " . $this->table . " v LEFT JOIN clientes c ON v.cliente_id = c.id WHERE v.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($cliente_id, $total) {
        $query = "INSERT INTO " . $this->table . " (cliente_id, total) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute([$cliente_id, $total])) {
            return $this->conn->lastInsertId();
        }
        return false;
    }
}