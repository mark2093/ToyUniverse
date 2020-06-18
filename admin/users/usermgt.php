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
  <div id="background-image1">

    <div class="col-sm-3"></div>
    <!-- Main -->
    <div class="col-md-8">
      <div class = "row"></div>
      <h1 align="" style="font-family:Georgia, serif;font-size:50px;"><span class="label label-primary"><u><b>User Management</b></u></span></h1><br>

      <!-- Add user-->
      <div class="col-md-4 text-center">
        <div class="panel panel-primary" >
          <div class="panel-heading"><b>Add Users</b></div>
          <!--<img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>--></img>
          <div class="panel-body"><b/>Add users From here</div>
          <button type = "button" class="btn btn-info btn-block" id="add_user" onClick="window.location='users.php';"><b>Add</b></button>
        </div>
      </div>
      <!-- Modify / Update user-->
      <div class="col-md-4 text-center">
        <div class="panel panel-danger" >
          <div class="panel-heading"><b>Update Users</b></div>
          <!--<img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>--></img>
          <div class="panel-body"><b/>Update Users Details</div>
          <button type = "button" class="btn btn-danger btn-block" id="add_user" onClick="window.location='update.php';"><b>Update</b></button>
        </div>
      </div>
      <!-- Delete user-->
      <div class="col-md-4 text-center">
        <div class="panel panel-danger" >
          <div class="panel-heading"><b>Delete Users</b></div>
          <!--<img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>--></img>
          <div class="panel-body"><b/>Delete Users From here</div>
          <button type = "button" class="btn btn-danger btn-block" id="add_user" onClick="window.location='delete.php';"><b>Delete</b></button>
        </div>
      </div>
      <!-- Add Points-->
      <div class="col-md-4 text-center">
        <div class="panel panel-info" >
          <div class="panel-heading"><b>Points</b></div>
          <!--<img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>--></img>
          <div class="panel-body"><b/>Add / Remove Points Of Users</div>
          <button type = "button" class="btn btn-primary btn-block" id="add_user" onClick="window.location='points.php';"><b>Modify Points</b></button>
        </div>
      </div>
      <!-- View All User-->
      <div class="col-md-4 text-center">
        <div class="panel panel-success" >
          <div class="panel-heading"><b>View Users</b></div>
          <!--<img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>--></img>
          <div class="panel-body"><b/>View Users From here</div>
          <button type = "button" class="btn btn-info btn-block" id="add_user" onClick="window.location='view.php';"><b>View</b></button>
        </div>
      </div>
    </div>



  </div>

  <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
</body>
</html>
