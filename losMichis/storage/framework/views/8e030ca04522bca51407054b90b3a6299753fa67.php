

<?php $__env->startSection('title','citas'); ?>

<?php $__env->startSection('inicio'); ?>
	<a href="<?php echo e(route('index')); ?>">inicio</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('pacientes.index')); ?>">Listado Citas</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('regDuenio'); ?>
	<a href="<?php echo e(route('index')); ?>">Crear cita</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	<div class="card-header">
    <h3 class="card-title">Citas</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>idMascota</th>
                <th>Fecha programada</th>
                <th>Estado</th>
                <th>Consultorio</th>
            </tr>
        </thead>
        <tbody>
			<?php $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php
				$diaProgramado = new DateTime($cita->fecha);
			    $diaProgramado = $diaProgramado->format('Y-m-d H:i'); 
			?>
			<tr>
				<td><?php echo e($cita->idMascota); ?></td>
				<td><?php echo e($diaProgramado); ?></td>
				<td><?php echo e($cita->estado); ?></td>
				<td><?php echo e($cita->consultorio); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php echo e($citas->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/citas/index.blade.php ENDPATH**/ ?>