<?php

require_once "LoginServices.php";
$l = new LoginServices();
$l->login();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="./../../assets/js/main2.js"></script>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if (!empty($_SESSION['success'])) : ?>
          <?php foreach ($_SESSION['success'] as $msg) : ?>
            <div class="alert alert-success" role="alert">
              <center><?= $msg ?></center>
            </div>
          <?php endforeach; ?>
        <?php $_SESSION['success'] = [];
        endif; ?>

        <?php if (!empty($_SESSION['error'])) : ?>
          <?php foreach ($_SESSION['error'] as $msg) : ?>
            <div class="alert alert-danger" role="alert">
              <center><?= $msg ?></center>
            </div>
          <?php endforeach; ?>
        <?php $_SESSION['error'] = [];
        endif; ?>

        <form action="" method="post">
          <div class="login-logo">
            <img src="./../../images/cropped-logo-uni2grow-1.png" alt="">
          </div>
          <hr>
          <br>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <center>
            <div class="row" style="margin-left: 70px;">
              <div class="col-8">
                <button type="submit" name="login" class="btn btn-danger">Connexion</button>

              </div>
          </center>

      </div>
      </form>


      <!-- /.social-auth-links -->
      <center>
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
      </center>

      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>