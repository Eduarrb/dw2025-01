<?php
	if(!isset($_SESSION['rol'])) {
		redirect("../");
	}
	if($_SESSION['rol'] !== 'admin') {
		redirect("../");
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bienes Raices</title>
		<link rel="stylesheet" href="<?php cargaAdminFiles('build/css/app.css'); ?>" />
	</head>
	<body>
		<header class="header">
			<div class="contenedor contenido-header">
				<div class="barra">
					<a href="<?php cargaAdminIndex(); ?>">
						<img src="<?php cargaAdminFiles('build/img/logo.svg'); ?>" alt="Logo" />
					</a>
					<div class="mobile-menu">
						<img src="<?php cargaAdminFiles('build/img/barras.svg'); ?>" alt="Menu">
					</div>
					<div class="derecha">
						<img src="<?php cargaAdminFiles('build/img/dark-mode.svg'); ?>" alt="Dark" class="dark-mode-boton">
						<nav class="navegacion">
							<a href="admin/nosotros.php">Nosotros</a>
							<a href="admin/anuncios.php">Anuncios</a>
							<a href="admin/blog.php">Blog</a>
							<a href="admin/contacto.php">Contacto</a>
						</nav>
					</div>
				</div>
			</div>
		</header>