<?php
    function post_propiedadCrear() {
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = escape($_POST['titulo']);
            $precio = escape($_POST['precio']);
            $descripcion = escape($_POST['descripcion']);
            $habitaciones = escape($_POST['habitaciones']);
            $wc = escape($_POST['wc']);
            $estacionamiento = escape($_POST['estacionamiento']);
            $vendedorId = escape($_POST['vendedorId'] ?? '');
            $creado = date('Y/m/d');
            $imagen_name = escape($_FILES['imagen']['name'] ?? '');
            $imagen_tmp = $_FILES['imagen']['tmp_name'] ?? '';
            

            if(strlen($titulo) <= 0) {
                $errores['titulo'] = "El campo titulo no debe estar vacio";
            }
            if($precio <= 0 || $precio < 20000){
                $errores['precio'] = "Debe agregar un precio adecuado mayor a cero o 20000";
            }
            if(strlen($descripcion) <= 0){
                $errores['descripcion'] = "El campo descripcion no debe estar vacio";
            }
            if($habitaciones <= 0){
                $errores['habitaciones'] = "Debe haber mas de una habitación";
            }
            if($wc <= 0){
                $errores['wc'] = "Debe haber mas de un baño";
            }
            if($estacionamiento <= 0){
                $errores['estacionamiento'] = "Debe haber mas de un estacionamiento";
            }
            if(!$vendedorId){
                $errores['vendedorId'] = "Debe seleccionar a un vendedor";
            }
            if(empty($imagen_name)) {
                $errores['imagen'] = 'Debe seleccionar una imagen para subir';
            }
            if(!empty($errores)) {
                $data['titulo'] = $titulo;
                $data['precio'] = $precio;
                $data['descripcion'] = $descripcion;
                $data['habitaciones'] = $habitaciones;
                $data['wc'] = $wc;
                $data['estacionamiento'] = $estacionamiento;
                $data['vendedorId'] = $vendedorId;
                return [$errores, $data];
            } else {
                $imagen_name = md5(uniqid()) . "." . explode(".", $imagen_name)[1];
                move_uploaded_file($imagen_tmp, "../../build/images/$imagen_name");
                $res = query("INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, estacionamiento, wc, creado, vendedorId) VALUES ('$titulo', $precio, '$imagen_name', '$descripcion', $habitaciones, $estacionamiento, $wc, NOW(), $vendedorId)");
                if($res) {
                    set_mensaje(displayMensaje("Propiedad creada correctamente", "exito"));
                    redirect("/admin");
                }
            }

        }
    }

    function get_propiedadesAll(){
        $query = query("SELECT id, titulo, imagen, precio FROM propiedades");
        while($row = arrayAssoc($query)){
            $propiedad = <<<DELIMITADOR
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['titulo']}</td>
                    <td><img src="../build/images/{$row['imagen']}" alt="{$row['titulo']}" class="imagen-tabla"></td>
                    <td>$ {$row['precio']}</td>
                    <td>
                        <a href="/admin/propiedades/editar.php?id={$row['id']}" class="btn-amarillo-block">editar</a>
                        <a href="#" class="btn-rojo-block delete" data-id="{$row['id']}">elminar</a>
                    </td>
                </tr>
DELIMITADOR;
            echo $propiedad;
        }
    }

    function get_propiedad(){
        if(!isset($_GET['id'])){
            redirect("../");
        } else {
            $id = escape(trim($_GET['id']));
            $query = query("SELECT * FROM propiedades WHERE id = $id");
            if(mysqli_num_rows($query) === 0) {
                redirect("../");
            } else {
                return ["", arrayAssoc($query)];
            }
        }
    }

    function post_propiedadEdit($id, $imgAnterior) {
        $errores = [];
        $data = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = escape($_POST['titulo']);
            $precio = escape($_POST['precio']);
            $descripcion = escape($_POST['descripcion']);
            $habitaciones = escape($_POST['habitaciones']);
            $wc = escape($_POST['wc']);
            $estacionamiento = escape($_POST['estacionamiento']);
            $vendedorId = escape($_POST['vendedorId'] ?? '');
            $imagen_name = escape($_FILES['imagen']['name'] ?? '');
            $imagen_tmp = $_FILES['imagen']['tmp_name'] ?? '';
            // debbugear($imgAnterior);
            if(!empty($imagen_name)) {
                $imagen_name = md5(uniqid()) . "." . explode(".", $imagen_name)[1];
                move_uploaded_file($imagen_tmp, "../../build/images/$imagen_name");
                $imgAnteriorLocation = "../../build/images/$imgAnterior";
                unlink($imgAnteriorLocation);
            } else {
                $imagen_name = $imgAnterior;
            }
            $res = query("UPDATE propiedades SET titulo = '$titulo', precio = $precio, descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedorId = $vendedorId, imagen = '$imagen_name' WHERE id = $id");
            if($res) {
                set_mensaje(displayMensaje("Propiedad actualizada correctamente", "exito"));
                redirect('../');
            }
        }
    }

    function post_propiedadDelete() {
        if(isset($_GET['delete'])) {
            $id = escape($_GET['delete']);
            
            $query = query("SELECT * FROM propiedades WHERE id = $id");
            if(contarFilas($query)) {
                $res = query("DELETE FROM propiedades WHERE id = $id");
                if($res) {
                    set_mensaje(displayMensaje("Propiedad eliminada correctamente", "exito"));
                    redirect("admin");
                }
            } else {
                set_mensaje(displayMensaje("El elemenot seleccionado no existe", "error"));
                redirect("admin");
            }
        }
    }
?>