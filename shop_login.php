<?php 
  include "user_includes/db.php" ;
?>
<?php
   ob_start();
?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop User Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" > <b> Shop User Login
                    </b> </h1>
                  </div>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="email" name="c_email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="c_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Login" name="login" class="btn btn-primary btn-user btn-block">
                    </div>
                   
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <hr>
                    
                  </form>
                  
                  <?php

  if(isset($_POST['login']))
  {
// echo "clicked!!";
      $shop_Email=$_POST['c_email'];
     
      
      $shop_Password=$_POST['c_password'];

      $query_check1="SELECT * from shop_registeration where s_email ='$shop_Email' && s_password='$shop_Password' ";
      
      $run1=mysqli_query($connection,$query_check1);

      if(mysqli_num_rows($run1)>0 )
      {
          while($row=mysqli_fetch_array($run1))
          {
              $id = $row['shop_id'];
              $s_name = $row['s_name'];

          }
        
        $_SESSION["shop_id"] = $id;
        $_SESSION["s_name"] = $s_name;
     
        header("Location:shop_dashboard.php");
      
     }
      else
      {
        echo "<script>alert('Incorrect employee code or password')</script>";
 
      }
  }
?> 

       
                  <hr>
                   <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                  <!-- <div class="text-center large">
                  Create an Account!
                    <a  href="shop_register.php">Sign Up</a>
                  </div>  -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
