<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "header.php"); ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>
        <?php 
            mostrar_msj();
            $res = validarUserLogin(); 
        ?>
        <form class="formulario" method="post">
            <fieldset>
                <legend>Datos del usuario</legend>
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
            </fieldset>
            <input type="submit" value="Iniciar Sesión" class="btn-verde">
        </form>
    </main>
    
    <?php include(VIEW_FRONT . DS . "footer.php"); ?>