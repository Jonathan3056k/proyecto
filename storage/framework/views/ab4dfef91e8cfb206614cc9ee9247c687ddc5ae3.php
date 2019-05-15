<?php $__env->startSection("title","Agergar tipos de ganado"); ?>
<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("tganado")); ?>"><i class="fa fa-backspace">Regresar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="<?php echo e(url("tganado")); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="desc_ganado">Tipo de Ganado</label>
                    <input type="text" id="desc_ganado" name="desc_ganado" class="form-control"  placeholder="Ingresa tipo de ganado">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>