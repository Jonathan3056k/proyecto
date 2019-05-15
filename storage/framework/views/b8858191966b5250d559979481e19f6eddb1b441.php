<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<header class="bg-primary">
    <h1 class="text-white font-weight-bold">Prototipo Localizador de ganado</h1>
    <ul class="nav justify-content-end">
        <li class="nav-item">

        </li>
        <li class="nav-item"><a href="<?php echo e(url("animales")); ?>" class="nav-link text-white">animales</a></li>
        <li class="nav-item"><a href="<?php echo e(url("dispositivos")); ?>" class="nav-link text-white">Dispositivos</a></li>
    </ul>
</header>
<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>
<footer class="bg-primary text-center">
    <span class="text-white font-weight-light"> Elaborado por ALumnos del TESVB de Valle de Bravo</span>
</footer>
</body>
</html>
