<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  
  
      <link rel="stylesheet" href="css/stylelogin_2.css">

  
</head>

<body>
  <html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Toy Universe Register</title>
<script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div id="logo"> 
  <h1><i> Toy Universe</i></h1>
</div> 
<section class="stark-login">

  <form action="signup.php" method="POST">	
    <div id="fade-box">
      <input type="text" name="fname" id="fname" placeholder="First Name" required>
      <input type="text" name="lname" id="lname" placeholder="Last Name" required>
      <input type="text" name="email" id="email" placeholder="Email" required>
      <input type="password" placeholder="Password" name="pass" required>
      <input type="password" placeholder="Re-Password" required>

          <!--<button name ="submit">Register</button> -->
          <input type ="submit" value="Register">
          <a href="LoginPage.php">
        <input type = "button" value="Login" ></a></input>
        </div>
      </form>
      <div class="hexagons">
        
                 <img src="images/NX-Desktop-BG.PNG" height="800px" width="1366px"/> 
              </div>      
            </section> 

            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>

            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>
  
    <script src="js/index.js"></script>

</body>
</html>
<?php
if( $_POST['status'] == 'success'){
  echo"<script>alert('Accout Created!')</script>";
}

?>