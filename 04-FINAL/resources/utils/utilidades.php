<?php
    function callHeaderExtra($extra) {
        if($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
            echo $extra;
        }
    }

    function cargaAdminFiles($ruta){
		if($_SERVER['REQUEST_URI'] === '/admin/' || $_SERVER['REQUEST_URI'] === '/admin/index.php') {
			echo '../' . $ruta;
		} else {
			echo '../../' . $ruta;
		}
	}
    
	function cargaAdminIndex(){
		if($_SERVER['REQUEST_URI'] === '/admin/' || $_SERVER['REQUEST_URI'] === '/admin/index.php') {
			echo './';
		} else {
			echo  '../';
		}
	}

	function debbugear($valor) {
        echo '<pre>';
        var_dump($valor);
        echo '</pre>';
        exit;
    }

	function escape($cadena){
		global $db;
		return trim(mysqli_real_escape_string($db, $cadena));
	}

	function query($consulta){
		global $db;
		return mysqli_query($db, $consulta);
	}

	function arrayAssoc($res) {
		return mysqli_fetch_assoc($res);
	}

	function getDato($array, $index, $campo) {
        return !empty($array[$index][$campo]) ? $array[$index][$campo] : '';
    }

	function redirect($location) {
		header("Location: $location");
	}

	function set_mensaje($msj) {
		if(!empty($msj)) {
			$_SESSION['mensaje'] = $msj;
		} else {
			$msj = '';
		}
	}

	function mostrar_msj() {
		if(isset($_SESSION['mensaje'])) {
			echo $_SESSION['mensaje'];
			unset($_SESSION['mensaje']);
		}
	}

	function displayMensaje($msj, $tipo) {
		return <<<DELIMITADOR
			<div class="alerta $tipo">
				$msj
			</div>
DELIMITADOR;
	}

?>