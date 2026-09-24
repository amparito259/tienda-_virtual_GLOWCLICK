<?php

require_once __DIR__ . "/../../models/Cliente.php";

class ClinteController {
    public function index(){
        try {
            $Clinte = new Cliente();
            $Clinte = $Clinte->getAll();

            require_once __DIR__ . "/../../views/Clinte/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de categoria" .$e->getMessage();
        }
    }
}