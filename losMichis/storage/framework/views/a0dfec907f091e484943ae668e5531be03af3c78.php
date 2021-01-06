

<?php $__env->startSection('title','Ver dueño'); ?>

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('duenios.index')); ?>">Listado dueños</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regDuenio'); ?>
	<a href="<?php echo e(route('duenios.create')); ?>">Crear dueño</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Acerca de: <?php echo e($duenio->nombre); ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong> Nombre completo</strong>
        <p class="text-muted"><?php echo e($duenio->nombre); ?> <?php echo e($duenio->apellidop); ?> <?php echo e($duenio->apellidom); ?></p>
        <hr>

        <strong> Dirección</strong>
        <p class="text-muted"><?php echo e($duenio->direccion); ?></p>
        <hr>

        <strong> Teléfono</strong>
        <p class="text-muted"><?php echo e($duenio->telefono); ?></p>
        <hr>

        <strong> Correo</strong>
        <p class="text-muted"><?php echo e($duenio->correo); ?></p>
        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Mascotas</strong>

        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
      </div>
      <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/duenios/show.blade.php ENDPATH**/ ?>