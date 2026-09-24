<a href="index.php?controlador=categoria&accion=crear" class="btn btn-primary">Categoria</a>
<a href="index.php?controlador=clientea&accion=crear" class="btn btn-primary">Cliente</a>
<a href="index.php?controlador=producto&accion=crear" class="btn btn-primary">Producto</a>
<a href="index.php?controlador=proveedor&accion=crear" class="btn btn-primary">proveedor</a>
<a href="index.php?controlador=usuario&accion=crear" class="btn btn-primary">usuario</a>
<a href="index.php?controlador=venta&accion=crear" class="btn btn-primary">Venta</a>



<?php
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/UsuarioController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$controllerCategoria = new CategoriaController();
$controllerCategoria->index();

$controllerCliente = new ClienteController();
$controllerCliente->index();

$controllerProducto = new ProductoController();
$controllerProducto->index();

$ControllerProveedor = new ProveedorController();
$ControllerProveedor->index();

$ControllerUsuario = new UsuarioController();
$ControllerUsuario->index();

$ControllerVenta = new VentaController();
$ControllerVenta->index();


if ($method === 'GET' && $uri === "/categoria"){
    $categoriaController = new CategoriaController();
    $CategoriaController->index();
}

if ($method === 'GET' && $uri === "/cliente"){
    $ClienteController = new ClienteController();
    $ClienteController->index();
}

if ($method === 'GET' && $uri === "/producto"){
    $ProductoController = new ProductoController();
    $ProductoController->index();
}

if ($method === 'GET' && $uri === "/Proveedor"){
    $ProveedorController = new ProveedorController();
    $ProveedorController->index();
}

if ($method === 'GET' && $uri === "/Usuario"){
    $UsuarioController = new UsuarioController();
    $UsuarioController->index();
}

if ($method === 'GET' && $uri === "/Venta"){
    $VentaController = new VentaController();
    $VentaController->index();
}

?>








