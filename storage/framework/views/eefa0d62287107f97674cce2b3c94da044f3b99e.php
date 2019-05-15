<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<style>
    #cabe
    {
        background: #b7d4ff;
    }
    #login
    {
        background-color: #ff9a88;
        margin-left: 800px;
    }
    #con
    {
        margin-right: auto;
        width: 800px;
        margin-top: -160px;
    }
</style>

<body>
<div id="cabe" align="center">
    <h1 class="font-weight-bold text-white" >Prototipo Localizador de ganado</h1>
    <div align="right">
    <ul class="nav justify-content-end">
        <li class="nav-item"><a href="<?php echo e(url("animales")); ?>" class="nav-link text-white"><h3><i class="fa fa-horse"></i>Opciones
                </h3></a></li>
    </ul>
    </div>
</div>

<div id="login" class="font-weight-light" align="center">
    <h1><i class="fa fa-user-lock"></i>Login</h1>
    <div class="registro" border="2">
        <label>Nombre de usuario</label>
        <input type="text" id="usuario" name="usuario" placeholder="nombre de usuario"><br>

        <label>Contraseña</label>
        <input type="password" placeholder="******"><br>
        <button type="submit" class="btn btn-group-sm"><i class=" "> Aceptar</i></button>
     </div>
</div>

<div id="con" class="">
    <h2 style="">Descripcion</h2>
    <strong>EL prototipo localizador envia señales a la aplicacion web donde se estara observando las ubicaciones de los
    animales de ganado en tiempo real</strong>
</div>

</body>
</html>