<?php
    defined('DB_HOST') ? null : define('DB_HOST', 'localhost');
    defined('DB_USER') ? null : define('DB_USER', 'root');
    defined('DB_PASS') ? null : define('DB_PASS', 'web12345678');
    defined('DB_NAME') ? null : define('DB_NAME', 'bienes_raices');

    function conectarDB() {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$db) {
            echo "error en la conexion";
            exit;
        }
        return $db;
    }
?>