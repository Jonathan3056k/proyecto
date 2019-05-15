<?php $__env->startSection("title","Registro de animales"); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="bg-success">
    <span class="text-center font-italic"><font color="#f0f8ff"><h1 class="text-capitalize text-xl-center">Registro de Animales</h1></font>
    </span>
</header>
<div class="row justify-content-md-center bg-secondary" >
    <div class="col">
        <a class="btn btn-primary" href=""><ion-icon name="arrow-dropleft-circle">Regresar</ion-icon> </a>
    </div>
</div>
<div class="row justify-content-md-start bg-secondary" >
    <div class="col-8" align="center">
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="clave" class="text-white">Clave</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="Clave">
                <label for="clave" class="text-white">Sexo</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="id_sexo">
                <label for="clave" class="text-white">Tipo de raza</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="id_raza">
                <label for="clave" class="text-white">Tipo de ganado</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="id_sexo">
                <label for="clave" class="text-white">Dispositivo</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="id_dispositivo">
                <label for="clave" class="text-white">Peso</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="peso">
                <label for="clave" class="text-white">Edad</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="edad">
                <label for="clave" class="text-white">Fecha de nacimiento</label>
                <input type="text" id="clave" name="Clave" class="form-text"  placeholder="fecha de nacimiento">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save">Guardar</i></button>
        </form>
    </div>
</div>
<br>
<div class="row" id="fondo">
    <div class="col-md-1"></div>
    <div class="col-md-3 text-white"><strong>Dirección:</strong>
        <br>Valle de Bravo, México
        <br>C.P. 51200</div>
    <div class="col-md-3 text-white"><strong>Institucion:</strong>
        <br>Tecnologico de Estudios Superiores de Valle de Bravo</div>
    <div class="col-md-3 text-white"><strong>Carrera:</strong>
        <br>Ingeniería en Sistemas Computacionales</div>
    <div class="col-md-1"></div>
</div>
<footer id="fin">
    <span class="font-weight-normal text-light " autocapitalize="text"> Desarrollado Por ALumnos de ISC del TESVB</span>
</footer>

</body>
</html>
