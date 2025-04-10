<?php
    require_once('../../resources/config.php');
    $id = escape($_GET['id']);
    try{
        echo json_encode(get_propiedadIndex($id));
    } catch(Exception $e) {
        echo json_encode($e->getMessage());
    }
?>