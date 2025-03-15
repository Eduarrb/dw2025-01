<?php
    require_once('db.php');
    require_once('funciones.php');
    ob_start();

    $id = $_GET['id'];
    // debbugear($id);
    /* 💥💥 NO ES UNA BUENA PRACTICA BORRAR DATOS A MENOS QUE TENGAN DOCUMENTACION QUE LO VALIDE  💥💥 */

    $query = "DELETE FROM peliculas WHERE peli_id = $id";
    $res = mysqli_query($conexion, $query);
    if($res) {
        header("Location: ./");
    }
?>