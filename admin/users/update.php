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
  <div >
    <div id="image-4">
      <br /><br />
      <div class="container" style="width:700px;">
        <br>
        <br>
        
  <h1 align="center" style="font-family:Georgia, serif;"><span class="label label-primary"><u><b>Update Users</b></u></span></h1>

        <form action="update1.php" method="POST">
          <br />
            <br />
              <br />
          <div class="form-group" align="center">
          <label for="cemail"><b /> Enter Email: </label>
          <input type="email" class="" name="cemail" style = "width:300px;"  required="true">

          <button type="submit" class="btn btn-success btn-lg">Search</button>
          <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='usermgt.php';">Back</button>
      </form>
    </div>



    <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
  </body>
  </html>
