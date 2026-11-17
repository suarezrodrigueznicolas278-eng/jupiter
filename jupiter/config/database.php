<?php
class Database {
    private static $pdo = null;
    public static function conectar() {
        if (self::$pdo === null) {
            // Cambia estos datos al subir al hosting
            $host = 'localhost';
            $db   = 'jupiter_db';
            $user = 'root';
            $pass = '';
            self::$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$pdo;
    }
}
