<?php
    $conexion = mysqli_connect('localhost', 'root', 'web12345678', 'stream');

    // var_dump($conexion);
    if(!$conexion) {
        echo 'Error de conexion';
        exit;
    }
?>