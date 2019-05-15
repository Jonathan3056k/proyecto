<?php $__env->startSection("title","Modificar ganados"); ?>

<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("tganado")); ?>"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <h3 class="text-primary text-center">Editar Ganado</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="<?php echo e(route("tganado.update",$tganado->id_tipoganado)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="desc_ganado">tipo ganado</label>
                    <input type="text" id="desc_ganado" name="desc_ganado" class="form-control"  placeholder="Ingresa nuevo tipo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>