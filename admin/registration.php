<?php
session_start();
include 'conn.php';
if(isset($_POST['subm']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
   
    mysqli_query($conn,"INSERT INTO login_tb(username,password,role)VALUES('$user','$pass','admin')");
    $id=mysqli_insert_id($conn);

    mysqli_query($conn,"INSERT INTO user_tb(login_id,username,password,name,address,mobile,email)VALUES('$id','$user','$pass','$name','$address','$mobile','$email')");
    $query=mysqli_query($conn,"SELECT * FROM login_tb WHERE username='$user' AND password='$pass'");

     if(mysqli_num_rows($query)>0)
     {

      $row=(mysqli_fetch_assoc($query));
      $_SESSION['id']=$row['login_id'];
      $_SESSION['type']=$row['role'];
      $_SESSION['logedin']=TRUE;


       header('location:dashboard.php');
     
    } 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - SheSecure</title>
    <style>
        .login-content .login-box {
    position: relative;
    min-width: 400px;
    min-height: 590px;
    background-color: #fff;
        }
        </style>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>She Secure</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
          <div class="form-group row">
                  <label class="control-label col-md-3">User Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="username" name="username" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input class="form-control" type="password" placeholder="password" name="password" required>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="username" name="name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                  <textarea class="form-control" rows="4" placeholder="Enter your address" name="address" required></textarea>
                </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Mobile</label>
                  <div class="col-md-8">
                  <input class="form-control" type="text" name="mobile" placeholder="Enter your mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                  </div>
               </div>
               <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control" type="email" placeholder="Enter email address" name="email" required>
                  </div>
                </div>
          <div class="form-group">
            <div class="utility">
              <!-- <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div> -->
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="subm"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>