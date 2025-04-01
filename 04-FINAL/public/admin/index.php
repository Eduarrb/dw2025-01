<?php require_once('../../resources/config.php'); ?>

<?php include(VIEW_BACK . DS . "header.php"); ?>
		<main class="contenedor seccion">
			<h1>Administrador de propiedades</h1>
            <?php mostrar_msj(); ?>
            <a href="/admin/propiedades/crear.php" class="btn-verde">Nueva propiedad</a>
            <table class="propiedades">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Título</td>
                        <td>Imagen</td>
                        <td>Precio</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php get_propiedadesAll(); ?>
                </tbody>
            </table>
		</main>
        <?php post_propiedadDelete(); ?>
		<?php include(VIEW_BACK . DS . "footer.php"); ?>