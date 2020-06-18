<?php include 'header.php'; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
//$query = "SELECT * FROM users ";
//$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Users</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">


</head>
<body >
  <div>
    <div id="image-4">

      <div class="container" style="width:700px;">
        <br /><br /><br /><br />
      <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-primary"><u><b>Add / Update Points</b></u></span></h1>

        <form action="points1.php" method="POST">
          <br />
            <br />
              <br />

          <h4><span class="label label-primary">Enter Email</span></h4>
          <input type="email" class="form-control" name="cemail"  required="true">
          <br>
          <div class="btn-toolbar" >
          <button type="submit" class="btn btn-success btn-lg">Search</button>
          <button type="button" class="btn btn-primary btn-lg" onClick="window.location='usermgt.php';">Back</button>
        </div>
      </form>
    </div>



    <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
  </body>
  </html>
