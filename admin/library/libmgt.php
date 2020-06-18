<?php include 'header.php'; ?>
<?php include 'dashnavbar.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
  <script>
  <script>
  var btn = document.getElementById('add_user');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo $page; ?>';
  });
  </script>
</head>
<body bgcolor="black">
  <div id="background-image3">
    <div id="image-3"></div>
    <div class="col-sm-3"></div>
    <!-- Main -->
    <div class="col-md-8">
      <div class = "row"></div>
      <h1 align="center" style="color:#7FFF00; font-family:Georgia, serif;font-size:45px;"><span class="label label-info" style="color:#191970;"><u><b>Library Management</b></u></span></h1><br>

      <h2 align="center" style="color:#7FFF00; font-family:Georgia, serif;font-size:35px;"><span class="label label-info" style="color:#4B0082;"><u><b>Toys</b></u></span></h2>
      <!-- Add Toys-->
      <div class="col-md-4 text-center">
        <div class="panel panel-primary" >
          <div class="panel-heading"><b>Add Products</b></div>
          <div class="panel-body"><img src="../images/batman-_the_penguin_face_off_76010_1_large.png" alt="" class="img-responsive" /></div>
          <button type = "button" class="btn btn-info btn-block" id="add_toy" onClick="window.location='toymain.php';"><b>Add</b></button>
        </div>
      </div>
      <!-- Modify / Update Toys-->
      <div class="col-md-4 text-center">
        <div class="panel panel-success" >
          <div class="panel-heading"><b>Update / Delete Products</b></div>
          <div class="panel-body"><img src="../images/emmas_lifeguard_post_41028_1_large.png" alt="" class="img-responsive" /></div>
          <button type = "button" class="btn btn-danger btn-block" id="updel_toy" onClick="window.location='toyupdel.php';"><b>Update / Delete Products</b></button>
        </div>
      </div>
      <!-- Delete Toys-->
      <div class="col-md-4 text-center">
        <div class="panel panel-info" >
          <div class="panel-heading"><b>Search Products</b></div>
          <div class="panel-body"><img src="../images/bk.jpg" alt="" class="img-responsive" /></div>
          <button type = "button" class="btn btn-primary btn-block" id="view_toy" onClick="window.location='toyview.php';"><b>Search</b></button>
        </div>
      </div>
      <br>
      <br>
        <h2 align="center" style="color:#7FFF00; font-family:Georgia, serif;font-size:40px;"><span class="label label-danger" style="color:#000000;"><u><b>Books</b></u></span></h2> <br>
      <!-- Add Books-->
      <div class="col-md-4 text-center">
        <div class="panel panel-info" >
          <div class="panel-heading"><b>Add Books</b></div>
          <div class="panel-body"><img src="../images/bk2.jpg" alt="" class="img-responsive" width="300" height="200" /></div>
          <button type = "button" class="btn btn-primary btn-block" id="add_book" onClick="window.location='bookmain.php';"><b>Add Books</b></button>
        </div>
      </div>
      <!-- Update / Delete Books-->
      <div class="col-md-4 text-center">
        <div class="panel panel-success" >
          <div class="panel-heading"><b>Update / Delete Books</b>
          </div>
          <div class="panel-body"><img src="../images/bk5.jpg" alt="" class="img-responsive" width="200" height="200"></div>
          <button type = "button" class="btn btn-danger btn-block" id="updel_book" onClick="window.location='bookupdel.php';"><b>Update / Delete Books</b></button>
        </div>
      </div>
      <!-- View Books-->
      <div class="col-md-4 text-center">
        <div class="panel panel-info" >
          <div class="panel-heading"><b>View Books</b></div>
          <div class="panel-body"><img src="../images/book1.jpg" alt="" class="img-responsive" width="250" height="200" /></div>
          <button type = "button" class="btn btn-primary btn-block" id="view_book" onClick="window.location='bookview.php';"><b>Search Books</b></button>
        </div>
      </div>
    </div>



  </div>

  <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
</body>
</html>
