<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Venta.php';
require_once __DIR__ . '/../../models/DetalleVenta.php';
require_once __DIR__ . '/../../models/Cliente.php';
require_once __DIR__ . '/../../models/Producto.php';

class VentaController {
    private $ventaModel;
    private $detalleModel;
    private $clienteModel;
    private $productoModel;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->ventaModel = new Venta($db);
        $this->detalleModel = new DetalleVenta($db);
        $this->clienteModel = new Cliente($db);
        $this->productoModel = new Producto($db);
    }

    public function index() {
        $ventas = $this->ventaModel->obtenerTodos();
        require_once __DIR__ . '/../../views/ventas/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $producto_id = $_POST['producto_id'];
            $cantidad = $_POST['cantidad'];

            $producto = $this->productoModel->obtenerPorId($producto_id);
            $total = $producto['precio'] * $cantidad;

            $venta_id = $this->ventaModel->crear($cliente_id, $total);
            if ($venta_id) {
                $this->detalleModel->crear($venta_id, $producto_id, $cantidad, $producto['precio']);
            }
            header('Location: index.php?controlador=venta&accion=index');
            exit;
        }
        $clientes = $this->clienteModel->obtenerTodos();
        $productos = $this->productoModel->obtenerTodos();
        require_once __DIR__ . '/../../views/ventas/crear.php';
    }

    public function detalle() {
        $id = $_GET['id'] ?? null;
        $venta = $this->ventaModel->obtenerPorId($id);
        $detalles = $this->detalleModel->obtenerPorVenta($id);
        require_once __DIR__ . '/../../views/ventas/detalle.php';
    }
}