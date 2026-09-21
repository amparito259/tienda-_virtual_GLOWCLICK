<?php
require_once __DIR__ . '/../models/usuario.php';

class UsuarioController {
    public function index() {
        try {
            $usuarioModel = new usuario();
            $usuarios = $usuarioModel->getAll();
            $usuarioConsultado = $usuarioModel->getAll();

            if ($usuarios && $usuarioConsultado) {
                require_once __DIR__ . '/../views/usuario/index.php';
            } else {
                $usuarios = [];
                $usuarioConsultado = [];
                require_once __DIR__ . '/../views/usuario/index.php';
            }
        } catch (Exception $e) {
            echo "Error en UsuarioController: " . $e->getMessage();
        }
    }
}
?>