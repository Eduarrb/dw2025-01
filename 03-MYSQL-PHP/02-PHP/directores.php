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
            <a href="dire_crear.php" class="btn btn-success mr-2">Subir Director</a>
            <a href="./" class="btn btn-info">Peliculas</a>
        </div>
        <?php include('db.php'); ?>

        <div class="row">
            <div class="col-md-3 mb-3">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSP53_m5Qdo9nBikn3VdENdaYNPxCqgHlnqNoKtY5cIFTX6me8oQibADPTxsBaM92vH1B0RqGTNp2FG16STR9JEBG6KLw41F7YfKcxknOw" alt="James Cameron" style="width: 100%;">
                <h4>
                    James Cameron
                </h4>
                <div>
                    <strong>Fecha nacimiento: </strong> 31-31-1970
                </div>
                
                <div>
                    <a href="" class="btn btn-success">editar</a>
                    <a href="" class="btn btn-danger">borrar</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>