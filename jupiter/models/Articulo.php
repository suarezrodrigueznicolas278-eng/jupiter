<?php
require_once __DIR__ . '/../config/database.php';
class Articulo {
    public function ultimos($limite = 3) {
        $st = Database::conectar()->prepare("SELECT * FROM articulos ORDER BY fecha DESC LIMIT " . (int)$limite);
        $st->execute();
        return $st->fetchAll();
    }
}
