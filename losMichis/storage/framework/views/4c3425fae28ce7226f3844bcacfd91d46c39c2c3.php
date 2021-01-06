

<?php $__env->startSection('title','pacientes'); ?>

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
	<div class="card-header">
    <h3 class="card-title">pacientes</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>Alias</th>
                <th>Dueño</th>
                <th>Tipo</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Sexo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
			<?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($paciente->alias); ?></td>
				<td><?php echo e($paciente->duenio); ?></td>
				<td><?php echo e($paciente->tipo); ?></td>
				<td><?php echo e($paciente->edad); ?> meses</td>
				<td><?php echo e($paciente->peso); ?> Kg</td>
				<td><?php echo e($paciente->sexo); ?></td>
				<td class="btn-group">
					<a href="<?php echo e(route('pacientes.show',$paciente->id)); ?>" type="submit" class="btn btn-sm bg-primary">Ver</a>
					<a href="<?php echo e(route('pacientes.edit',$paciente->id)); ?>" type="submit" class="btn btn-sm bg-warning">Editar</a>
					<a href="<?php echo e(route('pacientes.show',$paciente->id)); ?>" type="submit" class="btn btn-sm bg-danger">Eliminar</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php echo e($pacientes->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/pacientes/index.blade.php ENDPATH**/ ?>