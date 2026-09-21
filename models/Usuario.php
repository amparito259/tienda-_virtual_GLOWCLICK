<?php
class Usuario {
    private $conn;
    private $table = "usuarios";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        try {
            $query = "SELECT id, nombre, email, rol FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch(PDOException $e) {
            echo "Error en Usuario obtenerTodos: " . $e->getMessage();
        }
    }

    public function obtenerPorId($id) {
        try {
            $query = "SELECT id, nombre, email, rol FROM " . $this->table . " WHERE id = ?";
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
            echo "Error en Usuario obtenerPorId: " . $e->getMessage();
        }
    }

    public function crear($nombre, $email, $password, $rol = 'admin') {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO " . $this->table . " (nombre, email, password, rol) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$nombre, $email, $hashed_password, $rol])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Usuario crear: " . $e->getMessage();
            return false;
        }
    }

    public function actualizar($id, $nombre, $email, $rol) {
        try {
            $query = "UPDATE " . $this->table . " SET nombre = ?, email = ?, rol = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            if ($stmt->execute([$nombre, $email, $rol, $id])) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error en Usuario actualizar: " . $e->getMessage();
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
            echo "Error en Usuario eliminar: " . $e->getMessage();
            return false;
        }
    }
}
?>