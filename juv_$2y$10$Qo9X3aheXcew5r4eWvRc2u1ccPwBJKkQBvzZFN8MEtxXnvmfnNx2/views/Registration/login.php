<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/AdminLTE-master1/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../assets/AdminLTE-master1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/AdminLTE-master1/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Toastr -->
  <link rel="stylesheet" href="../../assets/AdminLTE-master1/plugins/toastr/toastr.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Chari</b>TEX</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Login</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" id="password" name="psw">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        
       
          <!-- /.col -->
          <div class="col-4">
            <button type="button" name="login-btn" id="login-btn"class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->

<script src="../../assets/AdminLTE-master1/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/AdminLTE-master1/assets/AdminLTE-master1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/AdminLTE-master1/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="../../assets/AdminLTE-master1/plugins/toastr/toastr.min.js"></script>
<script>
    var email = '<?=$_GET['email']?>';
     
  </script>
<script src="assets/js/login.js"></script>
</body>
</html>
