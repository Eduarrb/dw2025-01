<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1 class="text-center pt-5 pb-5 bg-primary text-white">Bievenido(a) a PeliStream</h1>
    <section class="container">
        <div class="row p-4">
            <a href="crear.php" class="btn btn-success mr-2">Subir Pelicula</a>
            <a href="directores.php" class="btn btn-info">Directores</a>
        </div>
        <?php
            // ⚡⚡ CONCEPTOS ⚡⚡ 
            $nombre = 'Pepito';
            $num = 152;
            define('apellido', 'Casas');
            $arrayMixto = ['Joshi', 123, true, 'Comer', [123, 456, 154]];
            $arrayAssoc = ['nombre' => 'Eduardo', 'Cargo' => 'Full Stack'];
            
            function debbugear($valor) {
                echo '<pre>';
                var_dump($valor);
                echo '</pre>';
                exit;
            }

            // debbugear($arrayAssoc);

            // if(true) {
            //     echo 'es verdadero';
            // } 

            // ⚡⚡ CRUD ⚡⚡
            /*
                C -> CREATE
                R -> READ
                U -> UPDATE
                D -> DELETE
            */
        ?>

        <?php include('db.php'); ?>

        <?php
            $query = "SELECT 
                a.peli_id, 
                a.peli_nombre, 
                CONCAT(b.dire_nombres, ' ', b.dire_apellidos) AS director, 
                a.peli_restricciones,
                a.peli_img 
                    FROM peliculas a 
                        INNER JOIN directores b ON a.peli_dire_id = b.dire_id";
            $res = mysqli_query($conexion, $query);        
        ?>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($res)) : ?>
                <div class="col-md-3 mb-3">
                    <img src="<?php echo $row['peli_img']; ?>" alt="<?php echo $row['peli_nombre']; ?>" style="width: 100%;">
                    <h4>
                        <?php echo $row['peli_nombre']; ?>
                    </h4>
                    <div>
                        <strong>Director: </strong> <?php echo $row['director']; ?>
                    </div>
                    <div>
                        <strong>Rating: </strong> <?php echo $row['peli_restricciones']; ?>
                    </div>
                    <div>
                        <a href="editar.php?id=<?php echo $row['peli_id']; ?>" class="btn btn-success">editar</a>
                        <a href="borrar.php?id=<?php echo $row['peli_id']; ?>" class="btn btn-danger">borrar</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</body>
</html>