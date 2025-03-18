<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <?php
        //echo $_SERVER['REQUEST_URI']; // = www.mipagina.com/index.php => /

    ?>
    <header class="header <?php 
        if($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
            echo "inicio";
        }
    ?>">
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
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
            <?php if($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') : ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php endif; ?>
        </div>
    </header>