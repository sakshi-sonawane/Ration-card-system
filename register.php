<?php 
  include "user_includes/db.php" ;
?>
<?php
   ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Customer Registeration</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-sm my-5">
      <div class="card-body ">
        <!-- Nested Row within Card Body -->
        
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class=<div class="row col-lg-7"> 
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 sm-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="register.php">
                <div class="form-group ">
                  
                    <input type="text" name="c_name" class="form-control form-control-user" id="exampleFirstName" placeholder=" Name">
                  </div>
                
                   <div class="form-group">
                  <input type="email" name="c_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="number" name="mobile_number" class="form-control form-control-user" id="exampleInputMobile" placeholder="Mobile Number">
                </div>
                <!-- <div class="form-group">
                  <input type="text" name="Ration_number" class="form-control form-control-user" id="exampleInputLocation" placeholder="Ration Card Number">
                </div> -->
                <div class="form-group">
                  <input type="text" name="Aadhar_number" class="form-control form-control-user" id="exampleInputLocation" placeholder="Aadhar Card Number">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="c_password" name="c_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="repeat_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" value="Register Account" name="register" class="btn btn-primary btn-user btn-block">
                
                
                <hr>
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <?php 
              //  session_start();
              //  $id = $_GET['customer_id'];
           
              if(isset($_POST['register']))
              {

                //echo"success";
                  $user_Name=$_POST['c_name'];
                  $user_Email=$_POST['c_email'];
                  $user_Password=$_POST['c_password'];
                  $repeat_Password=$_POST['repeat_password'];
                  $mobile=$_POST['mobile_number'];
                  $aadhar=$_POST['Aadhar_number'];

                  if($user_Email == "" || $user_Name = "" || $user_Password = "" || $repeat_Password="" || $mobile="" || $aadhar="")
                  {

                    echo "<script>alert('You can not enter blank dat') </script>";
                  
                  }
                  else
                  {
                    $query_register="SELECT * from customer_registeration where c_name='$user_Name' || c_password='$user_Password' || c_email='$user_Email' || c_mobile_no='$mobile' || aadhar_number='$aadhar' ";
                  $run1=mysqli_query($connection,$query_register);
                  if(mysqli_num_rows($run1>0))
                  {
           
                    {
                    echo "<script>alert('User Not Found')</script>";
                    
                  
                  }
                  else
                  { 
                    
                    $add_query="INSERT INTO customer_registeration(c_name,c_email,c_password,c_mobile_no,aadhar_number) VALUES('$user_Name','$user_Email','$user_Password','$mobile','$aadhar')";
                    
                      $result_add1=mysqli_query($connection,$add_query);
                      if($result_add1)
                     {
                       
                      
                         echo"<script>alert('data inserted successfully')</script>";
                        echo "post added successfully";
                      
                      }
                      else
                      {
                          die("query wrong!!");
                      }
                  }
                  

                  }
                 
                  

                 
               
               
                  
              }


              
            ?>
                
              <hr>
              <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div> -->
              <div class="text-center large">
              Already have an account?
                <a  href="login.php"> Login!</a>
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
