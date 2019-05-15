<?php $__env->startSection("title","Agergar dispositivos"); ?>
<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("dispositivos")); ?>"><i class="fa fa-backspace">Regresar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="<?php echo e(url("dispositivos")); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="clave_dis">Clave del dispositivo</label>
                    <input type="text" id="clave_dis" name="clave_dis" class="form-control"  placeholder="Ingresa Clave del dispositivo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>