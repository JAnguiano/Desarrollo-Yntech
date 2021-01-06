<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<!-- favicon -->
	<!-- estilos -->
</head>
<body class="hold-transition layout-top-nav">
	<!-- Content Wrapper. Contains page content -->
	<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Veterinaria "Los michis"</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><?php echo $__env->yieldContent('inicio'); ?></li>
              <li class="breadcrumb-item"><?php echo $__env->yieldContent('listDuenio'); ?></li>
              <li class="breadcrumb-item"><?php echo $__env->yieldContent('regDuenio'); ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
    <!-- /.content-header -->
	<!-- header -->
	<!-- nav -->
	<!-- footer -->
	<!-- script -->
</body>
<!-- jQuery -->
<script src="https://aderiac.org.mx/baseDatos/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://aderiac.org.mx/baseDatos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="https://aderiac.org.mx/baseDatos/plugins/jsgrid/demos/db.js"></script>
<script src="https://aderiac.org.mx/baseDatos/plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="https://aderiac.org.mx/baseDatos/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://aderiac.org.mx/baseDatos/dist/js/demo.js"></script>
<script src="https://reclutamiento.aderiac.org.mx/js/sweetAlert.js"></script>
</html><?php /**PATH C:\xampp\htdocs\losMichis\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>