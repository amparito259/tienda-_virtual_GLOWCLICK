<?php

require_once __DIR__ . "/../../models/categoria.php";

class CategoriaController {
    public function index(){
        try {
            $categoria = new Categoria();
            $categoria = $categoria->getAll();

            require_once __DIR__ . "/../../views/categoria/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de categoria" .$e->getMessage();
        }
    }
}