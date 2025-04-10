<?php require_once('../../resources/config.php'); ?>

<?php include(VIEW_BACK . DS . "header.php"); ?>
		<main class="contenedor seccion">
            <?php mostrar_msj(); ?>
            <a href="/admin/propiedades/crear.php" class="btn-verde">Nueva propiedad</a>
            <a href="/admin/vendedores/crear.php" class="btn-amarillo">Agregar Vendedor</a>
			<h1>Administrador de propiedades</h1>
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

			<h1>Administrador de vendedores</h1>
            <!-- OPCIONAL => mostrar a todos los vendedores creados. -->
		</main>
        <?php post_propiedadDelete(); ?>
		<?php include(VIEW_BACK . DS . "footer.php"); ?>