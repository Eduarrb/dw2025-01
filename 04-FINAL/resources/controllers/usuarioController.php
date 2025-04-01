<?php
    function validarUserReg() {
        $errores = [];
        $data = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // debbugear($_POST);
            $nombres = escape($_POST['nombres']);
            $apellidos = escape($_POST['apellidos']);
            $email = escape($_POST['email']);
            $password = escape($_POST['password']);
            $pass_confirm = escape($_POST['confirmar_password']);

            if(strlen($nombres) <= 0) {
                $errores['nombres'] = "El campo nombres no debe estar vacio";
            }
            if(strlen($apellidos) <= 0) {
                $errores['apellidos'] = "El campo apellidos no debe estar vacio";
            }
            if(strlen($email) <= 0) {
                $errores['email'] = "El campo email no debe estar vacio";
            }
            if(validar_correo($email)) {
                $errores['email'] = "El correo registrado ya existe, intenta con otro correo";
            }
            if(strlen($password) <= 0 || strlen($password) < 5) {
                $errores['password'] = "La contraseña no debe estar vacia o debe ser mayor igual a 6 caracteres";
            }
            if($pass_confirm !== $password) {
                $errores['pass_confirm'] = "las contraseñas deben ser iguales";
            }
            if(!empty($errores)) {
                // debbugear($errores);
                $data['nombres'] = $nombres;
                $data['apellidos'] = $apellidos;
                $data['email'] = $email;
                return [$errores, $data];
            } else {
                registro_usuario($nombres, $apellidos, $email, $password);
            }
        }
    }

    function registro_usuario($nombres, $apellidos, $email, $password) {
        $token = md5($email);
        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        try {
            $res = query("INSERT INTO usuarios (nombres, apellidos, email, pass, token) VALUES ('$nombres', '$apellidos', '$email', '$password', '$token')");
            if($res) {
                set_mensaje(displayMensaje("Registro satisfactorio, Por favor revisa tu bandeja o spam para activar tu cuenta ", "exito"));
                redirect('register.php');
            }
        } catch(Exception $e) {
            echo "Error " . $e->getMessage();
        }
    }
?>