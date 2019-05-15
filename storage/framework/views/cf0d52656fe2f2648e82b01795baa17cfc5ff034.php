<?php $__env->startSection("title","Agergar dispositivos"); ?>

<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("dispositivos")); ?>"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <h3 class="text-primary text-center">Editar dispositivo</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="<?php echo e(route("dispositivos.update",$dispositivo->id_dispositivo)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="clave_dis">Dispositivo</label>
                    <input type="text" id="clave_dis" name="clave_dis" class="form-control"  placeholder="Ingresa nuevo dispositivo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>