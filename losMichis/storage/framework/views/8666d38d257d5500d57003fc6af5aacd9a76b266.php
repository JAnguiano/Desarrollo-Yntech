

<?php $__env->startSection('title','dueños'); ?>

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
	<div class="card-header">
    <h3 class="card-title">Dueños encargados</h3>
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
			<?php $__currentLoopData = $duenios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duenio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($duenio->nombre); ?></td>
				<td><?php echo e($duenio->apellidop); ?> <?php echo e($duenio->apellidom); ?></td>
				<td><?php echo e($duenio->direccion); ?></td>
				<td><?php echo e($duenio->telefono); ?></td>
				<td class="btn-group">
					<a href="<?php echo e(route('duenios.show',$duenio->id)); ?>" type="submit" class="btn btn-sm bg-primary">Ver</a>
					<a href="<?php echo e(route('duenios.edit',$duenio->id)); ?>" type="submit" class="btn btn-sm bg-warning">Editar</a>
					<a href="<?php echo e(route('duenios.show',$duenio->id)); ?>" type="submit" class="btn btn-sm bg-danger">Eliminar</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php echo e($duenios->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/duenios/index.blade.php ENDPATH**/ ?>