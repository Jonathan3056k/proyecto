<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<div class="row justify-content-md-center">
    <div class="col">
        <a class="btn btn-success" href="<?php echo e(url("peliculas")); ?>"><i class="fa fa-backspace"></i> Regresar</a>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-8">
        <form action="<?php echo e(url("peliculas")); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_genero">Usuario</label>
            </div>
            <button type="submit" class="btn btn-primary btn-success text-lg-center"><i class="fa fa-save"> Agregar</i></button>
        </form>
    </div>
</div>
</div>
</html>
