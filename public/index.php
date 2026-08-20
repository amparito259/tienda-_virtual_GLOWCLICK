<?php
$controlador = $_GET['controlador'] ?? 'producto';
$accion = $_GET['accion'] ?? 'index';

$nombreControlador = ucfirst($controlador) . 'Controller';
$archivoControlador = __DIR__ . '/../app/controllers/' . $nombreControlador . '.php';

if (file_exists($archivoControlador)) {
    require_once $archivoControlador;
    if (class_exists($nombreControlador)) {
        $objeto = new $nombreControlador();
        if (method_exists($objeto, $accion)) {
            $objeto->$accion();
        } else {
            echo "Acción no encontrada";
        }
    } else {
        echo "Clase no encontrada";
    }
} else {
    echo "Página no encontrada";
}