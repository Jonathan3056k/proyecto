<?php $__env->startSection("title","Usuarios"); ?>

<?php $__env->startSection("content"); ?>
    <div class="badge-success">

        <span class="text-white font-weight-bold text-center">Registrar Usuario</span>
        <link rel="stylesheet" href="<?php echo e(asset("css/estilo1.css")); ?>" type="text/css"> <!-- de esta forma se manda a llamar el link de un estilo-->

    </div>
    <div background="CAMPO.jpg" style="background-repeat: no-repeat; background-position: center center;">
    <p class="float-left"> <INPUT type="submit" value="atras"> </p>
    <br>

    <p>Nombre de usuario: <br> <input type="text" name="nombre"/></p>

    <p>Correo electronico: <br> <input type="text" name="email"/></p>

    <p>Contraseña: <br> <input type="password" name="contrasena"/></p>

    <p>Confirmar contraseña: <br> <input type="password" name="contrasenaconfirmation"/></p>
    <br>

    <TD align="center"><INPUT type="submit" value="Guardar" > </TD>

    <footer class="bg-primary text-center">
        <span class="text-warning"> </span>
    </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>