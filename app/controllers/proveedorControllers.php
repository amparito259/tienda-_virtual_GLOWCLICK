<?php
require_once __DIR__ . '/../models/proveedor.php';

class proveedorController {
    public function index() {
        try {
            $proveedorModel = new Proveedor();
            $proveedores = $proveedorModel->getAll();
            
            if ($proveedores) {
                require_once __DIR__ . '/../views/proveedor/index.php';
            } else {
                $proveedores = [];
                require_once __DIR__ . '/../views/proveedor/index.php';
            }
        } catch (Exception $e) {
            echo "Error en proveedorController: " . $e->getMessage();
        }
    }
}
?>