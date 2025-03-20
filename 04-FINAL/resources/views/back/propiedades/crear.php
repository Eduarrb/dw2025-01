    <main class="contenedor seccion">
        <h1>Crear Propiedad</h1>
        <a href="../" class="btn-verde">volver</a>
        <?php post_propiedadCrear(); ?>
        <form class="formulario" method="post">
            <fieldset>
                <legend>Información general</legend>
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" placeholder="Título de la propiedad" name="titulo">

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio de la propiedad" name="precio">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/webp">

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripción"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ejem: 3" name="habitaciones" max="9" min="1">

                <label for="wc">wc:</label>
                <input type="number" id="wc" placeholder="Ejem: 3" name="wc" max="9" min="1">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ejem: 3" name="estacionamiento" max="9" min="1">
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedorId" id="vendedorId">
                    <option value="" selected disabled>-- Seleccione a un vendedor --</option>
                    <option value="1">John Smith</option>
                    <option value="2">Cristine Doe</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="btn-verde">
        </form>
    </main>