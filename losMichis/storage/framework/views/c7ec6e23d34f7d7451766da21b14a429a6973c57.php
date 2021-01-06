

<?php $__env->startSection('title','home'); ?>

<?php $__env->startSection('content'); ?>
	<div class="col-md-12">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaNQFlJEDw4zTcYpskyGozVMj-AdjOjEUAbg&usqp=CAU" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Los Michis</h3>
                <h5 class="widget-user-desc">Veterinaria</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="<?php echo e(route('duenios.index')); ?>" class="nav-link">
                      Dueños <span class="float-right badge bg-primary">10</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(route('pacientes.index')); ?>" class="nav-link">
                      Pacientes <span class="float-right badge bg-info">10</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(route('veterinarios.index')); ?>" class="nav-link">
                      Veterinarios <span class="float-right badge bg-success">3</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(route('citas.index')); ?>" class="nav-link">
                      Citas <span class="float-right badge bg-danger">5</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <div class="col-md-6">
            <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registra una cita</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route('citas.store')); ?>" method="POST">
        <!-- genera el token para guardar la información -->
        <?php echo csrf_field(); ?>
        <div class="card-body">
          <div class="form-group">
            <label for="idMascota"># Mascota</label>
            <input type="number" class="form-control" id="idMascota" name="idMascota">
          </div>
          <div class="form-group">
            <label for="fecha">Fecha y hora</label>
            <input type="datetime-local" class="form-control" id="fecha" name="fecha">
          </div>
          <div class="form-group">
            <label for="consultorio">Consultorio</label>
            <select name="consultorio" id="consultorio">
              <option value="Dalias">Dalias</option>
              <option value="Prados">Prados</option>
              <option value="Sierra Leona">Sierra Leona</option>
            </select>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/home.blade.php ENDPATH**/ ?>