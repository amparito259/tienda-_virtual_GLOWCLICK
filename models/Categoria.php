<?php
require_once __DIR__ . '/../../config/Database.php';

class Categoria {
    private $connection;

    public function __construct() {
        try {
            $database = new Database();
            $this->connection = $database->connect();
        } catch(PDOException $e) {
            echo "Error en la conexion de Categoria: " . $e->getMessage();
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT id, nombre, descripcion FROM categorias";
            $consulta = $this->connection->query($sql);
            if ($consulta) {
                return $consulta->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch(PDOException $e) {
            echo "Error viene de la categoria metodo getAll:" . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM categorias WHERE id = :id";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            if ($consulta->execute()) {
                $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
                if ($resultado) {
                    return $resultado;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error viene de la categoria metodo getById:" . $e->getMessage();
        }
    }
}
?>
