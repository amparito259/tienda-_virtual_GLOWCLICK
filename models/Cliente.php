<?php
require_once __DIR__ . "/../config/Database.php";

class Cliente {
    private $conn;
    private $table = "Cliente";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodas() {
        try {
            $query = "SELECT id_cliente, nombre, correo, telefono, direccion FROM " . $this->table;
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