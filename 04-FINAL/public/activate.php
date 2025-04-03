<?php
    require_once('../resources/config.php');

    if(!isset($_GET['email']) || !isset($_GET['token'])) {
        set_mensaje(displayMensaje("Datos de validación erroneos, intentelo otra vez", "error"));
        redirect("register.php");
    } else {
        activar_usuario();
    }
?>