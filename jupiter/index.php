<?php
// Punto de entrada / router (MVC)
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/ContactoController.php';

$accion = $_GET['accion'] ?? 'inicio';
$home = new HomeController();
$contacto = new ContactoController();

switch ($accion) {
    case 'guardar':    $contacto->guardar(); break;
    case 'gracias':    $contacto->gracias(); break;
    case 'admin':      $contacto->admin(); break;
    case 'editar':     $contacto->editar(); break;
    case 'actualizar': $contacto->actualizar(); break;
    case 'eliminar':   $contacto->eliminar(); break;
    default:           $home->inicio();
}
