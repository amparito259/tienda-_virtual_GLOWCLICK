<?php
require_once __DIR__ . "/../config/Database.php";

class Producto {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT id_producto, nombre, precio, stock, id_categoria, id_proveedor FROM producto";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }
    

    public function getById($idProducto)
    {
        try {
            $sql = "SELECT * FROM producto WHERE idProducto = :idProducto";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProducto", $idProducto, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Producto: " . $e->getMessage());
            return false;
        }
    }
}