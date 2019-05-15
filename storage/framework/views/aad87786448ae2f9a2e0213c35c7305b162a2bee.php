<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
<style>
    #header{
    color: white;
    font-size: 70px;
    line-height: 74px;
    font-weight: normal;
    text-shadow: 0px 1px 1px rgba(0,0,0,0.2);
    }

    #teaser-slider-2 {
        background-image: url(../img/mano.png);
        width: auto;
        background-repeat: no-repeat;
        margin-top: 0;
        margin-left: -96px;
        overflow: hidden;
        height: 499px;
    }
</style>
</head>
<header class="bg-primary">

    <span class="text-white font-weight-bold">Prototipo lozalizador de ganado</span>
    <ul class="nav justify-content-end">
        <li class="nav-item">
        </li>
        <li class="nav-item"><a href="" class="nav-link text-white">Precios</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Contacto</a></li>
        <li class="nav-item"><a href="<?php echo e(url("peliculas")); ?>" class="nav-link text-white">Acceso a clientes</a></li>
    </ul>
</header>

<header id="header" >
    <div class="row">

        <div class="large-6 columns">
            <div id="teaser-slider-2"></div>
        </div>

        <div class="large-6 columns">
            <h1>Localización satelital de ganado</h1>
            <span class="subheading">Localice sus animales en todo momento</span>
            <a class="download-btn" href="https://play.google.com/store/apps/details?id=com.geopos&hl=es" target="_blank"></a>

        </div>
    </div>
</header>
<div>
    <h2 class="alert-primary text-center">¿Funciones del Localizador de ganado?</h2>

    <em>EL prototipo envia señales de las ubicaciones de los animales en tiempo real a una plataforma web</em>
    <p>Es un sistema de localización de ganado basado en comunicaciones, con el envio periódico de la
    posición del animal, los rebaños estan supervisados de manera constante, aportando al ganadero una importante
    reducción de tiempo y gasto en su trabajo diario. </p>
</div>

<footer class="bg-info text-center">
    <span class="text-dark font-weight-bold"> Desarrollado por Alumnos del TESVB de Valle de Bravo</span>
</footer>
</body>
</html>