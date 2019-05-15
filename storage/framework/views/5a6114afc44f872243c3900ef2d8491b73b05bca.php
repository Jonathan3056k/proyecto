<?php $__env->startSection("title","Dispositivos"); ?>
<?php $__env->startSection("content"); ?>
    <style>

    </style>
    <div class="row justify-content-md-center">
        <div class="">
            <div class="col">
                <a class="btn btn-success" href="<?php echo e(url("dispositivos/create")); ?>"><i class="fa fa-plus" > Dispositivo</i></a>
            </div>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Dispositivo</th>
                    <th >Eliminar</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $dispositivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispositivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dispositivo->id_dispositivo); ?></td>
                        <td><?php echo e($dispositivo->clave_dis); ?></td>
                        <td>
                            <form action="<?php echo e(route("dispositivos.destroy",$dispositivo->id_dispositivo)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="<?php echo e(url("dispositivos",$dispositivo->id_dispositivo)); ?>/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>