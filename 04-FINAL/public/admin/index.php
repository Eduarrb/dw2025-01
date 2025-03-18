<?php require_once('../../resources/config.php'); ?>

<?php include(VIEW_BACK . DS . "header.php"); ?>
		<main class="contenedor seccion">
			<h1>Administrador de propiedades</h1>
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
                    <tr>
                        <td>1</td>
                        <td>Hermosa casa en la playa</td>
                        <td><img src="../build/img/destacada.webp" alt="Casa en la playa" class="imagen-tabla"></td>
                        <td>$120000</td>
                        <td>
                            <a href="#" class="btn-amarillo-block">editar</a>
                            <a href="#" class="btn-amarillo-block">boton</a>
                        </td>
                    </tr>
                </tbody>
            </table>
		</main>
		<?php include(VIEW_BACK . DS . "footer.php"); ?>