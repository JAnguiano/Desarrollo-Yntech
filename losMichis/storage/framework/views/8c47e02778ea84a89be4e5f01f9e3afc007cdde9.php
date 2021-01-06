

<?php $__env->startSection('title','Registrar paciente'); ?>

<?php $__env->startSection('inicio'); ?>
  <a href="<?php echo e(route('index')); ?>">inicio</a>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('pacientes.index')); ?>">Listado pacientes</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regDuenio'); ?>
	<a href="<?php echo e(route('pacientes.create')); ?>">Crear paciente</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registrar paciente</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route('pacientes.store')); ?>" method="POST">
      	<!-- genera el token para guardar la información -->
      	<?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="form-group">
            <label for="alias">Alias</label>
            <input type="text" class="form-control" id="alias" name="alias">
          </div>
          <div class="form-group">
            <label for="duenio">Dueño</label>
            <input type="number" class="form-control" id="duenio" name="duenio">
          </div>
          <div class="form-group">
            <input type="radio" id="perro" name="tipo" value="perro">
            <label for="perro">perro</label><br>
            <input type="radio" id="gato" name="tipo" value="gato">
            <label for="gato">gato</label><br>
            <input type="radio" id="ave" name="tipo" value="ave">
            <label for="ave">ave</label><br>
            <input type="radio" id="roedor" name="tipo" value="roedor">
            <label for="roedor">roedor</label>
          </div>
          <div class="form-group">
            <label for="edad">edad</label>
            <input type="number" class="form-control" id="edad" name="edad">
          </div>
          <div class="form-group">
            <label for="peso">peso</label>
            <input type="number" class="form-control" id="peso" name="peso">
          </div>
          <div class="form-group">
            <input type="radio" id="hembra" name="sexo" value="hembra">
            <label for="hembra">hembra</label><br>
            <input type="radio" id="Macho" name="sexo" value="Macho">
            <label for="Macho">Macho</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/pacientes/create.blade.php ENDPATH**/ ?>