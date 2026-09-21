<?php
require_once __DIR__ . '/../models/categoria.php';

class CategoriaController {
    public function index() {
        try {
            $categoriaModel = new Categoria();
            $categorias = $categoriaModel->getAll();

            if ($categorias) {
                require_once __DIR__ . "/../views/categoria/index.php";
            } else {
                $categorias = [];
                require_once __DIR__ . "/../views/categoria/index.php";
            }
        } catch (Exception $e) {
            echo "Error en CategoriaController: " . $e->getMessage();
        }
    }
}
?>