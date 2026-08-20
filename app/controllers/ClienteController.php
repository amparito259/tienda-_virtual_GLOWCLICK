<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Cliente.php';

class ClienteController {
    private $model;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Cliente($db);
    }

    public function index() {
        $clientes = $this->model->obtenerTodos();
        require_once __DIR__ . '/../../views/clientes/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->crear($_POST['nombre'], $_POST['email'], $_POST['telefono']);
            header('Location: index.php?controlador=cliente&accion=index');
            exit;
        }
        require_once __DIR__ . '/../../views/clientes/crear.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->actualizar($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['telefono']);
            header('Location: index.php?controlador=cliente&accion=index');
            exit;
        }
        $cliente = $this->model->obtenerPorId($id);
        require_once __DIR__ . '/../../views/clientes/editar.php';
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->eliminar($id);
        }
        header('Location: index.php?controlador=cliente&accion=index');
        exit;
    }
}