

<?php $__env->startSection('title','Crear dueño'); ?>

<?php $__env->startSection('inicio'); ?>
  <a href="<?php echo e(route('index')); ?>">inicio</a>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('duenios.index')); ?>">Listado dueños</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regDuenio'); ?>
	<a href="<?php echo e(route('duenios.create')); ?>">Crear dueño</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registrar dueño</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route('duenios.store')); ?>" method="POST">
      	<!-- genera el token para guardar la información -->
      	<?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="apellidop">Apellido paterno</label>
            <input type="text" class="form-control" id="apellidop" name="apellidop">
          </div>
          <div class="form-group">
            <label for="apellidom">Apellido materno</label>
            <input type="text" class="form-control" id="apellidom" name="apellidom">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>
          <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/duenios/create.blade.php ENDPATH**/ ?>