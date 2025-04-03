<?php
    ob_start();
    session_start();
    // session_destroy();
    require_once('db.php');
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");
    defined("VIEW_BACK") ? null : define("VIEW_BACK", __DIR__ . DS . "views" . DS . "back");

    require_once('utils/utilidades.php');

    $db = conectarDB();

    require __DIR__ . '/../public/vendor/autoload.php';

    require_once('caller.php');
?>