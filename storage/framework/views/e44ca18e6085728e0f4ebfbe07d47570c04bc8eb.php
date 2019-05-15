<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>Inicio_app</title>
</head>
<body>
<header class="">
    <h1 class="text-danger text-center font-italic">Rastreador de Ganado</h1>
        <ul class="nav justify-content-end">
        <li class="nav-item"><a href="" class="nav-link text-truncate">Login</a></li>
        <li class="nav-item"><a href="" class="nav-link text-truncate">Registrar</a></li>
    </ul>
</header>
<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>

<div class="row" id="fondo">
    <div class="col-auto"></div>
    <div class="col-md-3 text-white"><strong>Dirección:</strong>
        <br>Valle de Bravo, México
        <br>C.P. 51200</div>
    <div class="col-md-2 text-white"><strong>Institucion:</strong>
        <br>Tecnologico de Estudios Superiores de Valle de Bravo</div>
</div>

<footer id="color">
    <span class=""> Desarrollado por ALumnos del TESVB de Valle de Bravo </span>
</footer>
</body>
</html>