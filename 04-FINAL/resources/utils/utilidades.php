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
?>