<?php

class Cliente {
    private $conn;
    private $table = "DetalleVenta";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodas() {
        try {
            $query = "SELECT id FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error en Cliente getAll: " . $e->getMessage();
            return [];
        }
    }
}
?>