<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Categoria.php';

class CategoriaController {
    private $model;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Categoria($db);
    }

    public function index() {
        $categorias = $this->model->obtenerTodos();
        require_once __DIR__ . '/../../views/categorias/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->crear($_POST['nombre']);
            header('Location: index.php?controlador=categoria&accion=index');
            exit;
        }
        require_once __DIR__ . '/../../views/categorias/crear.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->actualizar($_POST['id'], $_POST['nombre']);
            header('Location: index.php?controlador=categoria&accion=index');
            exit;
        }
        $categoria = $this->model->obtenerPorId($id);
        require_once __DIR__ . '/../../views/categorias/editar.php';
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->eliminar($id);
        }
        header('Location: index.php?controlador=categoria&accion=index');
        exit;
    }
}