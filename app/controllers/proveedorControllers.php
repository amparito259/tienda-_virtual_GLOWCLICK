<?php

require_once __DIR__ . "/../../models/proveedor.php";

class ProveedorController {
    public function index(){
        try {
            $proveedor = new proveedor();
            $proveedor = $proveedor->getAll();

            require_once __DIR__ . "/../../views/proveedor/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de proveedor" .$e->getMessage();
        }
    }
}