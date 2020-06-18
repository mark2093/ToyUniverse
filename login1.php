<!DOCTYPE HTML>
<html>
<head>
  <title>Toy Universe</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <meta name="viewport" content="width=device-width, initial-scale="1.0" user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h3>Login</h3>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</button>
  <div class="modal fade" id="login">
      <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"> Login</h2>
                  <div class="modal-body"></div>
                  <form role="form">
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email"></input>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password"></input>
                      </div>
                  </form>

                  <div class="modal-footer"></div>
                  <button class="btn btn-success">Login</button>
        </div>

      </div>
  </div>







</div>
</body>
</html>




<!--Login Code -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center" style="font-family: Impact;">Login</h1>
      </div>
      <div class="modal-body">
        <form role="form" action="login.php" method="post" >
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="user_name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="pass">
            </div>
            <div class="form-group">
 <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
          <!--    <button class="btn btn-primary btn-lg btn-block" name="login">Sign In</button> -->

              <span class="pull-right"><a href="#modal-register" data-toggle="modal" data-target="#modal-register" data-dismiss="modal">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-1accordion2">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!--END OF LOGIN-->
  </body>
</html>

<?php
include("core/db_conection.php");


if(isset($_POST["user"])&& isset($_POST["pass"]))
{
  $uname=$_POST['user_name'];//same
  $email=$_POST['email'];//same
  $pass=$_POST['pass'];//same

    $check_user="SELECT * FROM users WHERE email='$email'AND pass='$pass'";
    $run=mysqli_query($dbcon,$check_user);
    if(mysqli_num_rows($check_user)==1)
    {
      $_SESSION['username'] = $email;
      header("Location:test.php");

        //$_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }


}

?>
