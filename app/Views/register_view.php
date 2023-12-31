<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tumbuhan di Taman Elektro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo base_url('assets') ?>/">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#">Tumbuhan di Taman Elektro</a>
    </div>
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="/save" method="post">
          <div class="form-group has-feedback mb-3">
            <input name="username" class="form-control" placeholder="Nama User">
            <div class="form-group has-feedback-append">
              <div class="form-group has-feedback-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="form-group has-feedback mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="form-group has-feedback-append">
              <div class="form-group has-feedback-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="form-group has-feedback mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="form-group has-feedback-append">
              <div class="form-group has-feedback-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group has-feedback mb-3">
            <input type="password" name="password" class="form-control" placeholder="Retype password">
            <div class="form-group has-feedback-append">
              <div class="form-group has-feedback-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
      </div>
      </form>
      <a href="/login" class="text-center">Kembali ke Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>