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
                $mensaje = "Por favor activa tu cuenta mediante este <a href='http://localhost:3000/activate.php?email=$email&token=$token'>Link</a>";
                sendEmail($email, 'Activar cuenta', $mensaje);
                set_mensaje(displayMensaje("Registro satisfactorio, Por favor revisa tu bandeja o spam para activar tu cuenta ", "exito"));
                redirect('register.php');
            }
        } catch(Exception $e) {
            echo "Error " . $e->getMessage();
        }
    }

    function activar_usuario() {
        if(isset($_GET['email']) && isset($_GET['token'])){
            $email = escape($_GET['email']);
            $token = escape($_GET['token']);

            $query = query("SELECT id FROM usuarios WHERE email = '$email' AND token = '$token'");
            if(contarFilas($query) == 1) {
                $user = arrayAssoc($query);
                $user_id = $user['id'];
                $res = query("UPDATE usuarios SET status = 1, token = '' WHERE id = $user_id");
                if($res) {
                    set_mensaje(displayMensaje("Su cuenta ha sido activada. Por favor inisie sesión", "exito"));
                    redirect("login.php");
                } else {
                    set_mensaje(displayMensaje("Los datos no son validos, por favor intentelo más tarde", "error"));
                    redirect("register.php");
                }
            }
        }
    }

    function validarUserLogin() {
        $errores = [];
        $data = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = escape($_POST['email']);
            $password = escape($_POST['password']);

            if(login_user($email, $password)) {
                redirect("./");
            } else {
                set_mensaje(displayMensaje("Tu correo o contraseña son incorrectos", "error"));
                redirect("login.php");
            }
        }
    }

    function login_user($email, $pass) {
        $query = query("SELECT * FROM usuarios WHERE email = '$email' AND status = 1");
        if(contarFilas($query) == 1) {
            $usuario = arrayAssoc($query);
            // debbugear($usuario);
            $id = $usuario['id'];
            $nombres = $usuario['nombres'];
            $apellidos = $usuario['apellidos'];
            $password = $usuario['pass'];
            $rol = $usuario['rol'];

            if(password_verify($pass, $password)) {
                $_SESSION['id'] = $id;
                $_SESSION['nombres'] = $nombres;
                $_SESSION['apellidos'] = $apellidos;
                $_SESSION['rol'] = $rol;

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
?>