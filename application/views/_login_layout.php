<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Microcréditos CIPAL - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <div class="text-center w-75 m-auto">
                      <a href="index.html">
                        <span><img src="../assets/img/logo/logo1.png" alt="65" height="65"></span>
                      </a>
                    </div>
                    <h5 class="text-muted mb-4 mt-3"><span>MICROCRÉDITOS</span></h5>
                  </div>
                  <?php if ($this->session->flashdata('msg')): ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <?= $this->session->flashdata('msg') ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif ?>
                  <?php if(validation_errors()) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?php echo validation_errors(); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php } ?>

                  <form class="user" action="<?php echo site_url('user/login'); ?>" method='post'>
                    <div class="form-group">
                      <label for="usuario"><i class="fas fa-envelope"></i> E-MAIL</label>
                      <input type="email" class="form-control form-control-user" required="" name="email" placeholder="Ingresar Email">
                    </div>

                    <div class="form-group">
                      <label for="password"><i class="fas fa-key"></i> Contraseña</label>
                      <input type="password" class="form-control form-control-user" required="" name="password" placeholder="Ingresar Contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                      <h5>Iniciar Sesión</h5>
                    </button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-alt">
          2021 - 2022 &copy; Microcréditos | Desarrollado por <a class="text-white-50">CIPAL WEB S.A DE C.V</a>
        </footer>
      </div>

    </div>
    
  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo site_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo site_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>