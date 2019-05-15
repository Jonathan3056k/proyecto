<?php $__env->startSection("title","Tipos Ganados"); ?>
<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("tganado/create")); ?>"><i class="fa fa-plus"> Agregar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Dispositivo</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $tganados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tganado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tganado->id_tipoganado); ?></td>
                        <td><?php echo e($tganado->desc_ganado); ?></td>
                        <td>
                            <form action="<?php echo e(route("tganado.destroy",$tganado->id_tipoganado)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="<?php echo e(url("tganado",$tganado->id_tipoganado)); ?>/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>