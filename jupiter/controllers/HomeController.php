<?php
require_once __DIR__ . '/../models/Producto.php';
require_once __DIR__ . '/../models/Articulo.php';
require_once __DIR__ . '/../models/Testimonio.php';
class HomeController {
    public function inicio() {
        $productoModel = new Producto();
        $tipos = $productoModel->tipos();
        // GET: filtro por tipo de vino (?tipo=Hielo)
        $tipoActual = $_GET['tipo'] ?? '';
        $productos = $tipoActual ? $productoModel->porTipo($tipoActual) : $productoModel->todos();
        $articulos = (new Articulo())->ultimos(3);
        $testimonios = (new Testimonio())->todos();
        $titulo = 'Jupiter | Europa, vino de hielo';
        require __DIR__ . '/../views/home.php';
    }
}
