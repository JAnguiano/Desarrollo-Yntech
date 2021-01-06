

<?php $__env->startSection('title','veterinarios'); ?>

<?php $__env->startSection('inicio'); ?>
	<a href="<?php echo e(route('index')); ?>">inicio</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('listDuenio'); ?>
	<a href="<?php echo e(route('veterinarios.index')); ?>">Listado veterinarios</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	<div class="card-header">
    <h3 class="card-title">Veterinarios</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
			<?php $__currentLoopData = $veterinarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veterinario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($veterinario->nombre); ?></td>
				<td><?php echo e($veterinario->apellidop); ?> <?php echo e($veterinario->apellidom); ?></td>
				<td><?php echo e($veterinario->direccion); ?></td>
				<td><?php echo e($veterinario->telefono); ?></td>
				<td><?php if($veterinario->estado==1){ echo "activo"; } else{ echo "inactivo";} ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php echo e($veterinarios->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/veterinarios/index.blade.php ENDPATH**/ ?>