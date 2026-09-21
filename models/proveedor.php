<?php
class Proveedor {
    private $conn;
    private $table = "proveedores";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        try {
            $query = "SELECT * FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch(PDOException $e) {
            echo "Error en Proveedor getAll: " . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
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
            echo "Error en Proveedor getById: " . $e->getMessage();
        }
    }

    public function crear($nombre, $contacto, $telefono, $email) {
        try {
            $query = "INSERT INTO " . $this->table . " (nombre, contacto, telefono, email) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$nombre, $contacto, $telefono, $email])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Proveedor crear: " . $e->getMessage();
            return false;
        }
    }

    public function actualizar($id, $nombre, $contacto, $telefono, $email) {
        try {
            $query = "UPDATE " . $this->table . " SET nombre = ?, contacto = ?, telefono = ?, email = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$nombre, $contacto, $telefono, $email, $id])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Proveedor actualizar: " . $e->getMessage();
            return false;
        }
    }

    public function eliminar($id) {
        try {
            $query = "DELETE FROM " . $this->table . " WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$id])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Proveedor eliminar: " . $e->getMessage();
            return false;
        }
    }
}
?>