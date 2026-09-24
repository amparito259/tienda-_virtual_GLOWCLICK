<?php

require_once __DIR__ . "/../../models/Usuario.php";

class UsuarioController {
    public function index(){
        try {
            $Usuario = new Usuario();
            $Usuario = $Usuario->getAll();

            require_once __DIR__ . "/../../views/Usuario/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de Usuario" .$e->getMessage();
        }
    }
}