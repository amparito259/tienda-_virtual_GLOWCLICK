<?php
require_once __DIR__ . "/../config/Database.php";

class Categoria {
    private $conn;
    private $table = "Categoria";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodas() {
        try {
            $query = "SELECT id_categoria, nombre, descripcion FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error en Categoria getAll: " . $e->getMessage();
            return [];
        }
    }
}
?>