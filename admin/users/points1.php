<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

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
        $points = $rows['points'];
        $email =$rows['email'];
        //$email =$rows['email'];
      }
    }
    else{ ?>

      <script>
      alert('No User found');
      window.location.href='update.php';
      </script>";
      <?php
    }
  }
  if(isset($_POST['update'])){
    //  $cemail=$_POST["cemail"];
    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $points = $_POST['points'];
    //$lname = $_POST['lname'];
    $email = $_POST['email'];
    ////$cemail = $_POST['email'];
    $query = "UPDATE users SET points='$_POST[points]' WHERE email='$_POST[email]'";
    $result = mysqli_query($connect, $query);


    if($result)
    {
      ?>

    <script>
    alert('Points Added New value = <?php echo $points ?>');
    window.location.href='points.php';
        </script>";

    <?php
  }
  }
  ?>



  <div>
    <div id="image-4">

      <div class="container" style="width:700px;">
          <br /><br /><br />
      <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-primary"><u><b>Add / Update Points</b></u></span></h1>

        <form action="points1.php" method="POST">
          <div class="form-group">
            <div class="form-group">

              <input type="text" name="email" value="<?php echo $email; ?>" hidden="true" />
            </div>
            <div class="form-group">
                <h4><span class="label label-primary">Modify Points</span></h4>
              <input type="text" class="form-control" name="points" value="<?php echo $points; ?>"/>
            </div>

            <button type="submit" class="btn btn-danger btn-lg" name="update">Update</button>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='usermgt.php';">Back</button>
          </form>
        </div>



        <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
      </body>
      </html>
