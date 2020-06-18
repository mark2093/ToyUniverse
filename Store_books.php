<?php
	require_once 'core/init.php';
  $sql="SELECT * FROM store_books WHERE B_main=0";
	$Main=$db->query($sql);
?>
<?php include 'header.php'; ?>
<?php include 'sidebartest.php'; ?>
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

  <div class="container-fluid">
<!-- Center books-->
<div class="col-md-3"></div>

  <!-- Main Books-->
  <div class="col-md-8">
      <div class = "row"></div>
      <h2 class ="text-center">BOOKS</h2>
<?php while($book=mysqli_fetch_assoc($Main)):    ?>
		  <div class="col-md-3">
          <h4><?=$book['B_title'];?></h2>
            <img src="<?=$book['B_image'];?>" alt="<?=$book['B_title'];?>"  id="images" class="product-img" style="margin-right:15px;"></img>
						<p></p>
            <p class="list-price text-danger">Price: <?=$book['B_price']; ?></p>
            <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Detail</button>
      </div>
			<p></p>
      <?php endwhile; ?>

    </div>




<footer class="text-center" id="footer">&copy; Copyright 2016-2017 VMUniverse</footer>
  </div>

</body>
</html>
