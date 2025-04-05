<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "header.php"); ?>

		<main class="contenedor seccion">
			<h2>Casas y Depas en Venta</h2>
			<div class="contenedor-anuncios">
				<?php get_propiedadesIndex(); ?>
			</div>
		</main>
		<?php include(VIEW_FRONT . DS . "footer.php"); ?>
		