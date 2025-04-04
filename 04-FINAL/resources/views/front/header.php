<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header <?php callHeaderExtra("inicio"); ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="./">
                    <img src="build/img/logo.svg" alt="Logo">
                </a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Menu">
                </div>
                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Dark" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') : ?>
                            <a href="admin">Admin</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <?php callHeaderExtra("<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>"); ?>
        </div>
    </header>