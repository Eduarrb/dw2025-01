    <main class="contenedor seccion">
        <h1>Crear Propiedad</h1>
        <a href="../" class="btn-verde">volver</a>
        <?php $errores = post_propiedadCrear(); ?>
        <?php 
            print_r($errores);
        ?>
        <form class="formulario" method="post">
            <fieldset>
                <legend>Información general</legend>
                <label for="titulo">Título:</label>
                <input 
                    type="text" 
                    id="titulo" 
                    placeholder="Título de la propiedad" 
                    name="titulo" 
                    value="<?php echo !empty($errores[1]['titulo']) ? $errores[1]['titulo'] : ''; ?>"
                    >
                <div class="text-error">
                    <!-- tenary question -->
                    <?php echo !empty($errores[0]['titulo']) ? $errores[0]['titulo'] : ''; ?>
                </div>

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio de la propiedad" name="precio">
                <div class="text-error">
                    <?php echo !empty($errores['precio']) ? $errores['precio'] : ''; ?>
                </div>

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/webp">

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripción"></textarea>
                <div class="text-error">
                    <?php echo !empty($errores['descripcion']) ? $errores['descripcion'] : ''; ?>
                </div>
            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ejem: 3" name="habitaciones" max="9" min="1">
                <div class="text-error">
                    <?php echo !empty($errores['habitaciones']) ? $errores['habitaciones'] : ''; ?>
                </div>

                <label for="wc">wc:</label>
                <input type="number" id="wc" placeholder="Ejem: 3" name="wc" max="9" min="1">
                <div class="text-error">
                    <?php echo !empty($errores['wc']) ? $errores['wc'] : ''; ?>
                </div>

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ejem: 3" name="estacionamiento" max="9" min="1">
                <div class="text-error">
                    <?php echo !empty($errores['estacionamiento']) ? $errores['estacionamiento'] : ''; ?>
                </div>
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedorId" id="vendedorId">
                    <option value="" selected disabled>-- Seleccione a un vendedor --</option>
                    <?php get_selectVendedor(); ?>
                </select>
                <div class="text-error">
                    <?php echo !empty($errores['vendedorId']) ? $errores['vendedorId'] : ''; ?>
                </div>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="btn-verde">
        </form>
    </main>