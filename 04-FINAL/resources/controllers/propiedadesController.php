<?php
    function post_propiedadCrear() {
        global $db;
        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = mysqli_real_escape_string($db, $_POST['titulo']);

            debbugear($titulo);
        }
    }
?>