<?php
require_once __DIR__ . '/../config/database.php';
class Producto {
    public function todos() {
        return Database::conectar()->query("SELECT * FROM productos ORDER BY id")->fetchAll();
    }
    public function porTipo($tipo) {
        $st = Database::conectar()->prepare("SELECT * FROM productos WHERE tipo = ? ORDER BY id");
        $st->execute([$tipo]);
        return $st->fetchAll();
    }
    public function tipos() {
        return Database::conectar()->query("SELECT DISTINCT tipo FROM productos ORDER BY tipo")->fetchAll(PDO::FETCH_COLUMN);
    }
}
