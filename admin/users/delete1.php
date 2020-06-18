<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Users</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">


</head>
<body >
  <?php
  if(isset($_POST['cemail'])){
    $cemail=$_POST["cemail"];

    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $query = "SELECT * FROM users WHERE email = '".$cemail."'";
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result)!=0){
      while ($rows = mysqli_fetch_array($result)){
      $fname = $rows['fname'];
      $lname =$rows['lname'];
      $email =$rows['email'];
    }
  }
  else{ ?>

<script>
alert('No User found');
window.location.href='delete.php';
</script>";

<?php

  }

}

  if(isset($_POST['delete'])){
  //  $cemail=$_POST["cemail"];
  $connect = mysqli_connect("localhost", "root", "","toy_universe");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $cemail = $_POST['email'];
  $query = "DELETE from users WHERE email='$_POST[email]'";
  $result = mysqli_query($connect, $query);


  if($result)
  {
    ?>

  <script>
  alert('User Deleted');
  window.location.href='delete.php';
  </script>";

  <?php
  }

}
  ?>


  <div >
    <div id="image-4">
      <br /><br />
            <div class="container" style="width:700px;">
                  <br />    <br />    <br />
            <h1 align="center" style="font-family:Georgia, serif;"><span class="label label-danger"><u><b>Delete Users</b></u></span></h1>

              <form action="delete1.php" method="POST">
                <div class="form-group">
                  <div class="form-group">
                <h4><span class="label label-primary">First Name</span></h4>
                  <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" />
                </div>
                <div class="form-group">
                <h4><span class="label label-primary">Last Name</span></h4>
                  <input type="text" class="form-control" name="lname" value= "<?php echo $lname; ?>" />
                </div>
                <div class="form-group">
                <h4><span class="label label-primary">Email</span></h4>
                  <input type="email" class="form-control" name="email"  value="<?php echo $email; ?>" />
                </div>
                <button type="submit" class="btn btn-danger btn-lg" name="delete">Delete</button>
                <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='usermgt.php';">Back</button>
              </form>
            </div>



      <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
    </body>
    </html>
