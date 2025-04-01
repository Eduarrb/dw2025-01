<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "header.php"); ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Registrate</h1>
        <?php 
            mostrar_msj();
            $res = validarUserReg(); 
        ?>
        <form class="formulario" method="post">
            <fieldset>
                <legend>Datos del nuevo usuario</legend>
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" value="<?php echo getDato($res, 1, 'nombres'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'nombres'); ?>
                </div>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" value="<?php echo getDato($res, 1, 'apellidos'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'apellidos'); ?>
                </div>

                <label for="email">Correo</label>
                <input type="email" name="email" id="email" value="<?php echo getDato($res, 1, 'email'); ?>">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'email'); ?>
                </div>

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'password'); ?>
                </div>

                <label for="confirmar_password">Confirmar Contraseña</label>
                <input type="password" name="confirmar_password" id="confirmar_password">
                <div class="text-error">
                    <?php echo getDato($res, 0, 'pass_confirm'); ?>
                </div>
            </fieldset>
            <input type="submit" value="Registrarme" class="btn-verde">
        </form>
    </main>
    
    <?php include(VIEW_FRONT . DS . "footer.php"); ?>