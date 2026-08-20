<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Usuario.php';

class UsuarioController {
    private $model;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Usuario($db);
    }

    public function index() {
        $usuarios = $this->model->obtenerTodos();
        require_once __DIR__ . '/../../views/usuarios/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->crear($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['rol']);
            header('Location: index.php?controlador=usuario&accion=index');
            exit;
        }
        require_once __DIR__ . '/../../views/usuarios/crear.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->actualizar($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['rol']);
            header('Location: index.php?controlador=usuario&accion=index');
            exit;
        }
        $usuario = $this->model->obtenerPorId($id);
        require_once __DIR__ . '/../../views/usuarios/editar.php';
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->eliminar($id);
        }
        header('Location: index.php?controlador=usuario&accion=index');
        exit;
    }
}