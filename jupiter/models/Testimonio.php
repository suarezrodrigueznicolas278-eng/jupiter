<?php
require_once __DIR__ . '/../config/database.php';
class Testimonio {
    public function todos() {
        return Database::conectar()->query("SELECT * FROM testimonios ORDER BY id")->fetchAll();
    }
}
