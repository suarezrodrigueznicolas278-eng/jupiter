<?php
require_once __DIR__ . '/../config/database.php';
class Contacto {
    private $db;
    public function __construct() { $this->db = Database::conectar(); }

    public function crear($nombre, $email, $mensaje) {
        $st = $this->db->prepare("INSERT INTO contactos (nombre,email,mensaje) VALUES (?,?,?)");
        return $st->execute([$nombre, $email, $mensaje]);
    }
    public function todos() {
        return $this->db->query("SELECT * FROM contactos ORDER BY id DESC")->fetchAll();
    }
    public function obtener($id) {
        $st = $this->db->prepare("SELECT * FROM contactos WHERE id = ?");
        $st->execute([$id]);
        return $st->fetch();
    }
    public function actualizar($id, $nombre, $email, $mensaje) {
        $st = $this->db->prepare("UPDATE contactos SET nombre=?, email=?, mensaje=? WHERE id=?");
        return $st->execute([$nombre, $email, $mensaje, $id]);
    }
    public function eliminar($id) {
        $st = $this->db->prepare("DELETE FROM contactos WHERE id = ?");
        return $st->execute([$id]);
    }
}
