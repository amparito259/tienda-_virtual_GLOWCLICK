<?php
class Producto {
    private $conn;
    private $table = "productos";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        $query = "SELECT p.*, c.nombre as categoria FROM " . $this->table . " p LEFT JOIN categorias c ON p.categoria_id = c.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $precio, $stock, $categoria_id) {
        $query = "INSERT INTO " . $this->table . " (nombre, precio, stock, categoria_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre, $precio, $stock, $categoria_id]);
    }

    public function actualizar($id, $nombre, $precio, $stock, $categoria_id) {
        $query = "UPDATE " . $this->table . " SET nombre = ?, precio = ?, stock = ?, categoria_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre, $precio, $stock, $categoria_id, $id]);
    }

    public function eliminar($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}