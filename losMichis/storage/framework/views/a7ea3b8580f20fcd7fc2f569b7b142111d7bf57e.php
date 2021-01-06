

<?php $__env->startSection('title','Editar dueño'); ?>

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('duenios.index')); ?>">Listado dueños</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regDuenio'); ?>
	<a href="<?php echo e(route('duenios.create')); ?>">Crear dueño</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- general form elements -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edición dueño</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route('duenios.update',$duenio)); ?>" method="POST">
      	<!-- genera el token para guardar la información -->
      	<?php echo csrf_field(); ?>
      	<?php echo method_field('put'); ?>
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo e($duenio->nombre); ?>'>
          </div>
          <div class="form-group">
            <label for="apellidop">Apellido paterno</label>
            <input type="text" class="form-control" id="apellidop" name="apellidop" value="<?php echo e($duenio->apellidop); ?>">
          </div>
          <div class="form-group">
            <label for="apellidom">Apellido materno</label>
            <input type="text" class="form-control" id="apellidom" name="apellidom" value="<?php echo e($duenio->apellidom); ?>">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo e($duenio->telefono); ?>">
          </div>
          <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo e($duenio->correo); ?>">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo e($duenio->direccion); ?>">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/duenios/edit.blade.php ENDPATH**/ ?>