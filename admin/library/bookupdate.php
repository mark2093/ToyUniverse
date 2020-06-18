<?php include 'header.php'; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
//$query = "SELECT * FROM users ";
//$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Book Details</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">





</head>
<body >
  <div>
    <div id="image-7" style="height:550px;">
      <br /><br />
      <div class="container" style="width:700px;">
          <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-info"><u><b>Update Book</b></u></span></h1>
        <br />
        <form action="bookupdate1.php" method="POST">
          <br />
            <br />
              <br />
          <div class="form-group">
            <h4><span class="label label-primary">Enter Book Code</span></h4>
          <input type="text" class="form-control" name="mcode"  required="true">
          <br>
          <button type="submit" class="btn btn-success btn-lg">Search</button>
          <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='storemgt.php';">Back</button>
      </form>
    </div>



    <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
  </body>
  </html>
