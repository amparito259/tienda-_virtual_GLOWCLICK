<?php
require_once __DIR__ . '/../models/venta.php';

class VentaController {
    public function index() {
        try {
            $ventaModel = new Venta();
            $ventas = $ventaModel->getAll();
            
            if ($ventas) {
                require_once __DIR__ . '/../views/venta/index.php';
            } else {
                $ventas = [];
                require_once __DIR__ . '/../views/venta/index.php';
            }
        } catch (Exception $e) {
            echo "Error en VentaController: " . $e->getMessage();
        }
    }
}
?>