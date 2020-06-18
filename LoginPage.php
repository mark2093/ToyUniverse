<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/stylelogin.css">

  
</head>

<body>
  <html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Toy Universe Login</title>
<script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div id="logo"> 
  <h1><i> Toy Universe</i></h1>
</div> 
<section class="stark-login">
<?php
$db = new pdo('mysql:host=localhost;dbname=toy_universe','root','');
if(isset($_POST['email']) && isset($_POST['pass'])){
      $email = $_POST['email'];
      $pass = md5($_POST['pass']);
      $stmt = $db->prepare("SELECT * FROM users WHERE email=? AND pass=? ");
      //$stmt->bind_Param('ss', $email,$pass);
      $stmt->bindParam(1, $email);
      $stmt->bindParam(2, $pass);
      $stmt->execute();
      $row = $stmt->fetch();
      $emailid = $row['email'];
      $password = $row['pass'];
      $id = $row['id'];
      $role = $row['role'];
//echo($row);
      if($email==$emailid && $password==$pass){
        session_start();
        //$_SESSION['loggedin'] = true;
        $_SESSION['email'] = $emailid;
        $_SESSION['pass'] = $password;
        $_SESSION['id'] = $id;
        $_SESSION['role'] = $role;
        //echo ($email);
        //echo ($pass);
        //echo "Successful And Session Started";
        $message = "Welcome to Toy Universe";
  echo "<script type='text/javascript'>alert('$message');</script>";
      ?>

    <script>window.location.href='index.php'</script>
      <?php
      }else{
        header("location:LoginPage.php?remark_login=failed");
  
        ?>
        
<?php
      } 
    }

?>
  <form  method="post">	
    <div id="fade-box">
      <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Password" required>

          
          <input type ="submit" value="Login">
          <a href="RegisterPage.php">
        <input type = "button" value="Register" ></a></input>

        </div>
      </form>
      <div class="hexagons">
        
                 <img src="images/NX-Desktop-BG.PNG" height="768px" width="1366px"/> 
              </div>      
            </section> 

            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>

            <ul>
              <li>Home</li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>

  <!--<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script> -->

  <script src="js/index.js"></script>

</body>

</html>
  
    <script src="js/index.js"></script>

</body>
</html>
