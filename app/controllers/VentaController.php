<?php

require_once __DIR__ . "/../../models/Venta.php";

class VentaController {
    public function index(){
        try {
            $Venta = new Venta ();
            $Venta = $Venta->getAll();

            require_once __DIR__ . "/../../views/Venta/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de Venta" .$e->getMessage();
        }
    }
}