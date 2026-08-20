<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Producto.php';
require_once __DIR__ . '/../../models/Categoria.php';

class ProductoController {
    private $model;
    private $categoriaModel;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Producto($db);
        $this->categoriaModel = new Categoria($db);
    }

    public function index() {
        $productos = $this->model->obtenerTodos();
        require_once __DIR__ . '/../../views/productos/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->crear($_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['categoria_id']);
            header('Location: index.php?controlador=producto&accion=index');
            exit;
        }
        $categorias = $this->categoriaModel->obtenerTodos();
        require_once __DIR__ . '/../../views/productos/crear.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->actualizar($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['categoria_id']);
            header('Location: index.php?controlador=producto&accion=index');
            exit;
        }
        $producto = $this->model->obtenerPorId($id);
        $categorias = $this->categoriaModel->obtenerTodos();
        require_once __DIR__ . '/../../views/productos/editar.php';
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->eliminar($id);
        }
        header('Location: index.php?controlador=producto&accion=index');
        exit;
    }
}