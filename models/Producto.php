<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
{
    private $conn;
    private $table = "producto";

    public function __construct($db = null)
    {
        if ($db) {
            $this->conn = $db;
        } else {
            $database = new Database();
            $this->conn = $database->connect();
        }
    }

    public function getAll()
    {
        try {

            $query = "SELECT 
                        p.id,
                        p.nombre,
                        p.precio,
                        p.id_categoria,
                        c.nombre AS categoria
                      FROM producto p
                      LEFT JOIN categoria c 
                      ON p.id_categoria = c.id_categoria";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error en Producto getAll: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {

            $query = "SELECT * FROM producto WHERE id = ?";

            $stmt = $this->conn->prepare($query);
            $stmt->execute([$id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error en Producto getById: " . $e->getMessage();
            return false;
        }
    }
}
?>