
<!--Logout-->

<!DOCTYPE HTML>
<html>
<head>
  <title>Toy Universe</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><img src="images/toy-universe-logo.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/ToyUniverse/index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Store <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Toys</a></li>
          <li><a href="#">Books</a></li>
         </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Library <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="librarytoys.php">Toys</a></li>
          <li><a href="#">Books</a></li>
          <li><a href="membership.php">Membership Plans</a></li>
          <li><a href="guide.php">Guide</a></li>
        </ul>
      </li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Admin Panel</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#modal-register" data-toggle="modal" data-target="#modal-register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
         
         

        


  <!--login modal-->
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

          <button class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>

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

<!-- Signup -->
       <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">

             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">
                 <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
               </button>
               <h3 class="modal-title" id="modal-register-label">Sign up now</h3>
               <p>Fill in the form below to get instant access:</p>
             </div>

             <div class="modal-body">

                     <form role="form" action="index.php" method="post" class="registration-form" >
                       <div class="form-group">
                         <label class="sr-only" for="form-first-name">First name</label>
                           <input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-last-name">Last name</label>
                           <input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-user-name">User name</label>
                           <input type="text" name="username" placeholder="User name..." class="form-last-name form-control" id="form-user-name">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-email">Email</label>
                           <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-password">Password</label>
                           <input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-con-pass">Confirm Password</label>
                           <input type="passsword" name="form-con-pass" placeholder="Confirm Password..." class="form-con-pass form-control" id="form-con-pass">
                         </div>
                         <div class="form-group">
                           <label class="sr-only" for="form-about-yourself">About yourself</label>
                           <textarea name="form-about-yourself" placeholder="About yourself..."
                                 class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                         </div>
                         <button type="submit" class="btn" value="Register" name="Register">Sign me up!</button><br></br>
                         <span class="pull-right"><a href="#loginModal" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</a></span>
                     </form>

             </div>

           </div>
         </div>
       </div>

</body>
</html>







