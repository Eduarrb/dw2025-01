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
            $imagen_name = escape($_FILES['imagen']['name']);
            $imagen_tmp = $_FILES['imagen']['tmp_name'];
            
            // debbugear($imagen_tmp);

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

                move_uploaded_file($imagen_tmp, "../../build/images/$imagen_name");
                $res = query("INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, estacionamiento, wc, creado, vendedorId) VALUES ('$titulo', $precio, '', '$descripcion', $habitaciones, $estacionamiento, $wc, NOW(), $vendedorId)");
                if($res) {
                    header("Location: /admin");
                }
            }

        }
    } 
?>