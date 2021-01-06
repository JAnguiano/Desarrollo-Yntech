

<?php $__env->startSection('title','Ver paciente'); ?>

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
	<!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Acerca de: <?php echo e($paciente->alias); ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong> Alias</strong>
        <p class="text-muted"><?php echo e($paciente->alias); ?> (<?php echo e($paciente->tipo); ?>)</p>
        <hr>

        <strong> Dueño</strong>
        <p class="text-muted"><?php echo e($paciente->duenio); ?></p>
        <hr>

        <strong> Edad</strong>
        <p class="text-muted"><?php echo e($paciente->edad); ?> meses</p>
        <hr>

        <strong> Peso</strong>
        <p class="text-muted"><?php echo e($paciente->peso); ?> Kg</p>
        <hr>

        <strong> Sexo</strong>

        <p class="text-muted"><?php echo e($paciente->sexo); ?></p>
      </div>
      <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/pacientes/show.blade.php ENDPATH**/ ?>