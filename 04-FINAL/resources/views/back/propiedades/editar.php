    <main class="contenedor seccion">
        <h1>Editar Propiedad</h1>
        <a href="../" class="btn-verde">volver</a>
        <?php $res = get_propiedad(); ?>
        
        <form class="formulario" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>
                <label for="titulo">Título:</label>
                <input 
                    type="text" 
                    id="titulo" 
                    placeholder="Título de la propiedad" 
                    name="titulo" 
                    value="<?php echo getDato($res, 1, 'titulo'); ?>"
                >
                <div class="text-error">
                    <?php echo getDato($res, 0, 'titulo'); ?>
                </div>

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio de la propiedad" name="precio" value="<?php echo getDato($res, 1, 'precio'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'precio'); ?>
                </div>

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/webp">
                <img src="../../build/images/<?php echo getDato($res, 1, 'imagen'); ?>" alt="<?php echo getDato($res, 1, 'titulo'); ?>" class="imagen-small">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'imagen'); ?>
                </div>

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripción"><?php echo getDato($res, 1, 'descripcion'); ?></textarea>
                <div class="text-error">
                    <?php echo getDato($res, 0, 'descripcion'); ?>
                </div>
            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ejem: 3" name="habitaciones" max="9" min="1" value="<?php echo getDato($res, 1, 'habitaciones'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'habitaciones'); ?>
                </div>

                <label for="wc">wc:</label>
                <input type="number" id="wc" placeholder="Ejem: 3" name="wc" max="9" min="1" value="<?php echo getDato($res, 1, 'wc'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'wc'); ?>
                </div>

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ejem: 3" name="estacionamiento" max="9" min="1" value="<?php echo getDato($res, 1, 'estacionamiento'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'estacionamiento'); ?>
                </div>
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedorId" id="vendedorId">
                    <option value="" selected disabled>-- Seleccione a un vendedor --</option>
                    <?php get_selectVendedor(getDato($res, 1, 'vendedorId')); ?>
                </select>
                <div class="text-error">
                    <?php echo getDato($res, 0, 'vendedorId'); ?>
                </div>
            </fieldset>
            <input type="submit" value="Editar Propiedad" class="btn-verde">
        </form>
        <?php post_propiedadEdit(getDato($res, 1, 'id'), getDato($res, 1, 'imagen')); ?>
    </main>
    