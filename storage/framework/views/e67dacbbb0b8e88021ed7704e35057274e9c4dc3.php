<?php $__env->startSection("title","Animales"); ?>

<?php $__env->startSection("content"); ?>
    <div class="row justify-content-md-center">

</div>
<div class="row justify-content-md-center">
    <div class="col-8">
        <form action="<?php echo e(url("peliculas")); ?>" method="post">
            <h1 class="bg-info text-white text-center text-">Registro de animales</h1>
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="id_sexo">Usuario</label>
                <select name="id_sexo" id="id_sexo">
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Sexo</label>
                <select name="id_sexo" id="id_sexo">
                    <?php $__currentLoopData = $sexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sexo->id_sexo); ?>" ><?php echo e($sexo->desc_sexo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Tipo de Ganado</label>
                <select name="id_tganado" id="id_tganado">
                    <?php $__currentLoopData = $tganados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ganado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ganado->id_ganado); ?>" ><?php echo e($ganado->desc_ganado); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Dispositivo</label>
                <select name="id_dispositivo" id="id_dispositivo">
                    <?php $__currentLoopData = $dispositivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispositivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dispositivo->id_dispositivo); ?>" ><?php echo e($dispositivo->clave_dis); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="clave">Clave de animal</label>
                <input type="text" id="clave" name="clave" class="form-control"  placeholder="Ingresa una clave para el animal">
            </div>

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="text" id="peso" name="peso" class="form-control"  placeholder="Ingresa peso de animal">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <select name="edad">

                </select>
            </div>
            <button type="submit" class="btn-danger"><i class="fa fa-times"> Cancelar</i></button>
            <button type="submit" class="btn btn-group-sm"><i class="fa fa-save "> Guardar</i></button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>