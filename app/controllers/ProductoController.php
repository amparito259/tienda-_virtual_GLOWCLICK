<?php

require_once __DIR__ . "/../../models/producto.php";

class ProductoController {
    public function index(){
        try {
            $producto = new Producto();
            $productos = $producto->getAll();

            require_once __DIR__ . "/../../views/productos/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de productos" .$e->getMessage();
        }
    }
}