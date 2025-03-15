<?php require_once('db.php'); ?>
<?php require_once('funciones.php'); ?>
<?php ob_start(); ?>

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
            <a href="./" class="btn btn-success mr-2">Regresar</a>
            <a href="" class="btn btn-info">Directores</a>
        </div>
        <div class="row justify-content-center">
            <h4 class="text-center col-md-12">
                Ingrese los datos de la pelicula
            </h4>
            <?php 
                $id = $_GET['id'];
                // debbugear($id);
                $query = "SELECT * FROM peliculas WHERE peli_id = $id";
                $res = mysqli_query($conexion, $query);
                // debbugear($res);
                $pelicula = mysqli_fetch_assoc($res);
            ?>
            <form class="col-md-6" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre de la pelicula</label>
                    <input type="text" class="form-control" id="nombre" name="peli_nombre" value="<?php echo $pelicula['peli_nombre']; ?>">
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" id="genero" name="peli_genero" value="<?php echo $pelicula['peli_genero']; ?>">
                </div>
                <div class="form-group">
                    <label for="estreno">Fecha Estreno</label>
                    <input type="date" class="form-control" id="estreno" name="peli_estreno" value="<?php echo $pelicula['peli_fechaEstreno']; ?>">
                </div>
                <div class="form-group">
                    <label for="restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="restricciones" name="peli_restricciones" value="<?php echo $pelicula['peli_restricciones']; ?>">
                </div>
                <div class="form-group">
                    <label for="imagen">URL Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="peli_img" value="<?php echo $pelicula['peli_img']; ?>">
                </div>
                <div class="form-group">
                    <label for="director">Director</label>
                    <?php
                        $query = "SELECT * FROM directores";
                        $res = mysqli_query($conexion, $query);
                    ?>
                    <select id="director" class="form-control" name="peli_dire_id">
                        <option value="">- Selecciona un director -</option>
                        <?php while($row = mysqli_fetch_assoc($res)) : ?>
                            <?php if($row['dire_id'] === $pelicula['peli_dire_id']) : ?>
                                <option value="<?php echo $row['dire_id']; ?>" selected>
                                    <?php echo $row['dire_nombres'] . ' ' . $row['dire_apellidos']; ?>
                                </option>
                            <?php else : ?>
                                <option value="<?php echo $row['dire_id']; ?>">
                                    <?php echo $row['dire_nombres'] . ' ' . $row['dire_apellidos']; ?>
                                </option>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Editar" class="btn btn-primary" name="editar">
                </div>
            </form>
            <?php 
                if(isset($_POST['editar'])) {
                    $peli_nombre = $_POST['peli_nombre'];
                    $peli_genero = $_POST['peli_genero'];
                    $peli_estreno = $_POST['peli_estreno'];
                    $peli_restricciones = $_POST['peli_restricciones'];
                    $peli_img = $_POST['peli_img'];
                    $peli_dire_id = $_POST['peli_dire_id'];

                    $query = "UPDATE peliculas SET peli_dire_id = $peli_dire_id, peli_nombre = '$peli_nombre', peli_genero = '$peli_genero', peli_fechaEstreno = '$peli_estreno', peli_restricciones = '$peli_restricciones', peli_img = '$peli_img' WHERE peli_id = $id";
                    $res = mysqli_query($conexion, $query);
                    // debbugear($res);
                    if($res) {
                        header("Location: ./");
                    }
                }
            ?>
        </div>
    </section>
</body>
</html>