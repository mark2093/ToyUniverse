<?php
	require_once 'core/init.php';
?>
<?php include 'sidebartest.php'; ?>
<?php include 'header.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Toy Universe</title>
  <script src="js/jquery-3.1.1.min.js"/></script>
<script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->


</head>
<body>
<?php
$sql = "SELECT * FROM categories WHERE Parent=0";
$pquery = $db->query($sql); ?>

  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
      <a href="/ToyUniverse/index.php" class="navbar-brand" id="text">Toy Universe</a>
      <ul class="nav navbar-nav">
	  <?php  while($parent= mysqli_fetch_assoc($pquery)): ?>
	  <?php
		$parent_id = $parent['C_id'];
	  $sql2= "SELECT * from categories WHERE Parent='$parent_id'";
      $cquery= $db->query($sql2);
	  ?>
        <!-- Dropdown Menu-->
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Store<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Toys</a></li>
          <li><a href="#">Books</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['C_name'];?><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
		<?php while($child=mysqli_fetch_assoc($cquery)): ?>
          <li><a href="librarypro.php">Toys</a></li>

          <li><a href="#"><?php echo $child ['C_name']?></a></li>

          <li><a href="#">Books</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="guide.php">Guide</a></li>
          <li><a href="membership.php">Plans</a></li>
					<!--<li style="width:300px;left:10px;top=10px;"><input type="text" class="form-control" id="search"></input></li>-->
<?php endwhile; ?>
        </ul>
        </li>
<?php endwhile; ?>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">FAQ<span class="plain"></span></a>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">About Us<span class="plain"></span></a>

        </li>

    </div>
  </nav>
<!-- Center products-->
<div class="col-md-2"></div>
  <!-- Main Products-->
  <div class="col-md-8">
      <div class = "row"></div>
      <h2 class ="text-center">Products</h2>


		  <div class="col-md-3">
          <h4>Racing Cars</h2>
            <img src="images/88-9S.jpg"alt="product1" id="images" class="product-img"></img>
            <p class="list-price text-danger">Price: 3 Points</p>
            <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Detail</button>
      </div>








      <!--Login code -->
      <div class="modal fade" id="login">
          <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header"></div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title"> Login</h2>
                      <div class="modal-body"></div>
                      <form role="form">
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email"></input>
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password"></input>
                              <label class="checkbox"></label>
                              <input type="checkbox">Remember Me</input>
                          </div>
                      </form>

                      <div class="modal-footer"></div>
                      <button class="btn btn-success btn-lg">Login</button>
            </div>

            <?php include 'details-modal-car.php';
             ?>
<footer class="text-center" id="footer">&copy; Copyright 2016-2017 VMUniverse</footer>
  </div>

</body>
</html>
