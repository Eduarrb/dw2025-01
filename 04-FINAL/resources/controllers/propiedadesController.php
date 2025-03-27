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
                // debbugear([$errores, $data]);
                return [$errores, $data];
            } else {
                $imagen_name = md5(uniqid()) . "." . explode(".", $imagen_name)[1];
                // debbugear($imagen_name);
                move_uploaded_file($imagen_tmp, "../../build/images/$imagen_name");
                $res = query("INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, estacionamiento, wc, creado, vendedorId) VALUES ('$titulo', $precio, '$imagen_name', '$descripcion', $habitaciones, $estacionamiento, $wc, NOW(), $vendedorId)");
                if($res) {
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
                        <a href="#" class="btn-rojo-block">boton</a>
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

    function post_propiedadEdit($id) {
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

            $res = query("UPDATE propiedades SET titulo = '$titulo', precio = $precio, descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedorId = $vendedorId WHERE id = $id");
            if($res) {
                redirect('../');
            }
        }
    }
?>