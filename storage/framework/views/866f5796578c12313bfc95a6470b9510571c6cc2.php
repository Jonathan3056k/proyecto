<?php $__env->startSection("title","Animales"); ?>

<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("animales/create")); ?>"><i class="fa fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-10">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>No. Animal</th>
                    <th>Usuario</th>
                    <th>Sexo</th>
                    <th>Tipo de Ganado</th>
                    <th>Dispositivo</th>
                    <th>Clave de animal</th>
                    <th>Peso</th>
                    <th>Edad</th>
                </tr>
                </thead>
                <tbody>
                        <td>
                            <form action="">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>