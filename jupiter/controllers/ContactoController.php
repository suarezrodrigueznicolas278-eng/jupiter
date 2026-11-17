<?php
require_once __DIR__ . '/../models/Contacto.php';
class ContactoController {
    private $modelo;
    public function __construct() { $this->modelo = new Contacto(); }

    // POST: crear
    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }
        $nombre  = trim($_POST['nombre'] ?? '');
        $email   = trim($_POST['email'] ?? '');
        $mensaje = trim($_POST['mensaje'] ?? '');
        if ($nombre && filter_var($email, FILTER_VALIDATE_EMAIL) && $mensaje && $this->modelo->crear($nombre, $email, $mensaje)) {
            header('Location: index.php?accion=gracias'); exit;
        }
        header('Location: index.php?error=1#contacto'); exit;
    }
    public function gracias() {
        $titulo = '¡Gracias! | Jupiter';
        require __DIR__ . '/../views/gracias.php';
    }
    // GET: leer
    public function admin() {
        $contactos = $this->modelo->todos();
        $titulo = 'Mensajes | Jupiter';
        require __DIR__ . '/../views/admin.php';
    }
    // GET: formulario de edición (?id=)
    public function editar() {
        $c = $this->modelo->obtener((int)($_GET['id'] ?? 0));
        if (!$c) { header('Location: index.php?accion=admin'); exit; }
        $titulo = 'Editar mensaje | Jupiter';
        require __DIR__ . '/../views/editar.php';
    }
    // POST: actualizar
    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->modelo->actualizar((int)$_POST['id'], trim($_POST['nombre']), trim($_POST['email']), trim($_POST['mensaje']));
        }
        header('Location: index.php?accion=admin'); exit;
    }
    // GET: eliminar (?id=)
    public function eliminar() {
        $this->modelo->eliminar((int)($_GET['id'] ?? 0));
        header('Location: index.php?accion=admin'); exit;
    }
}
