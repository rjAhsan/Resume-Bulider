<?php


session_start();
  if(isset($_POST['register'])){
    
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
  $sql = "INSERT INTO users (email,password)
  VALUES ('$useremail','$userpassword')";
 
  
  if($conn->query($sql)){
    header('Location: http://localhost/ResumeBulider/Pages/login.php');
  }
  else{
    echo "User Not Register";
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
      <p class="login-box-msg">Register to start your session</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="First Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text"  class="form-control" placeholder="Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
      
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
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
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12 mb-2" >
            <input name="register" value="Register"  type="submit" class="btn btn-primary btn-block"></input>

          </div>

         
          <!-- /.col -->
        </div>
      </form>

      <div class="row">
         
         <!-- /.col -->
         <div class="col-12">
            <a href="login.php">

           <input  value="Login"  type="submit" class="btn btn-primary btn-block"></input>
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
