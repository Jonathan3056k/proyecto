<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        #cabe
        {
            background: #b7d4ff;
        }
    </style>

</head>
<body>
<header id="cabe">
    <h1 class="font-weight-bold" >Prototipo Localizador de ganado</h1>

    <ul class="nav justify-content-end">
        <li class="nav-item"><a href="<?php echo e(url("animales")); ?>" class="nav-link text-white"><i class="fa fa-horse"></i> Animales</a></li>
        <li class="nav-item"><a href="<?php echo e(url("dispositivos")); ?>" class="nav-link text-white"><i class="fa fa-satellite-dish"></i> Dispositivos</a></li>
        <li class="nav-item"><a href="<?php echo e(url("tganado")); ?>" class="nav-link text-white"><i class="fa fa-horse-head"></i> Tipo Ganados</a></li>
        <li class="nav-item"><a href="<?php echo e(url("/regresar")); ?>" class="nav-link text-white"><i class="fa fa-arrow-alt-circle-left"></i> Regresar</a></li>
        <li class="nav-item"><a href="<?php echo e(url("/persons")); ?>" class="nav-link text-white"><i class="fa fa-users"></i> Usuarios</a></li>
    </ul>
</header>
<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>
<footer id="cabe" class="">
    <div style="color: darkblue" align="center">Elaborado por Alumnos del TESVB de Valle de Bravo </div>
</footer>
</body>
</html>
