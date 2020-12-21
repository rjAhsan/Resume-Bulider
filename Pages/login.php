<?php


session_start();
  if(isset($_POST['login'])){
    
$useremail=$_REQUEST['email'];
$userpassword=$_REQUEST['password'];

if(empty($useremail)){
echo "please enter email ";
}
elseif(empty($userpassword)){
echo "please enter password";
}
else{
  include('../Backend/db.php');
  $sql = "SELECT email, id, password FROM users WHERE email='$useremail'";
  $result = $conn->query($sql);
  mysqli_num_rows($result);
  
  if( mysqli_num_rows($result) > 0){
    while ($row = $result->fetch_assoc()) {
      $id=$row['id'];
      $email=$row['email'];
      $password=$row['password'];
   }
      if( ($email===$useremail) && ($password===$userpassword))
      {
        $_SESSION["user_id"] = $id;
        $_SESSION["email"] = $email;
        $_SESSION["password"]=$password;
        header('Location: http://localhost/ResumeBulider/Pages/index.php');

      }
      else{
        echo "Not authnaticated";
      }
     
  }
  else{
    echo "User Not Fouund ";
  }
    
}

//end_post_login
  }

?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->


  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../assets/template/index2.html" class="h1"><b>Resume</b>Bulider</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mb-2">
         
          <!-- /.col -->
          <div class="col-12">
            <input name="login" Value="Login"  type="submit" class="btn btn-primary btn-block"></input>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="row">
         
          <!-- /.col -->
          <div class="col-12">

          <a href="register.php">
            <input value="Register" type="submit" class="btn btn-primary btn-block"></input>
            </a>
          </div>
          <!-- /.col -->
        </div>

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/template/dist/js/adminlte.min.js"></script>
</body>
</html>
