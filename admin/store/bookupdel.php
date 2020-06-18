<?php include 'header.php'; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
//$query = "SELECT * FROM users ";
//$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">





</head>
<body >
  <div>
    <div id="image-6" style="height:550px;">
      <br /><br />
      <div class="container" style="width:700px;">
        <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-info"><u><b>Update / Delete Books</b></u></span></h1>
        <br />
        <form >
          <br />

          <div class="form-group" align="center">
          &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-warning btn-lg"onClick="window.location='bookupdate.php';"><b>Update </button> &nbsp;&nbsp;<b> <span class="label label-success" style="font-size: 20px;">  OR </span> &nbsp;&nbsp; </b>
          <button type="button" class="btn btn-danger btn-lg" onClick="window.location='bookdelete.php';">Delete</button> <br>
          <br>
          <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='storemgt.php';">Back</button>
      </form>
    </div>



    <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
  </body>
  </html>
