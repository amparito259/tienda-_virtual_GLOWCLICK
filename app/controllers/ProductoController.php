<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        try {

            $productoModel = new Producto();

            $productos = $productoModel->getAll();

            require_once __DIR__ . "/../views/producto/index.php";

        } catch (Exception $e) {

            echo "Error en ProductoController: " . $e->getMessage();
        }
    }
}
?>