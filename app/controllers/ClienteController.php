<?php
require_once __DIR__ . "/../models/clientes.php";

class ClientesController {
    public function index(){
        try {
            $clienteModel = new clientes();
            $clientes = $clienteModel->getAll();

            if ($clientes) {
                require_once __DIR__ . "/../views/clientes/index.php";
            } else {
                $clientes = [];
                require_once __DIR__ . "/../views/clientes/index.php";
            }
        } catch (Exception $e) {
            echo "Error en ClientesController: " . $e->getMessage();
        }
    }
}
?>