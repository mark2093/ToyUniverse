<?php include 'header.php'; ?>

<?php

$db = mysqli_connect("localhost", "root", "", "toy_universe");
$sql = "SELECT * FROM lib_products WHERE Main=0";
$result = mysqli_query($db,$sql);

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Toy Universe</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->


</head>
<body>
	<div class="container-fluid text-center">
	<div class="col-md-16">
	<form action="results.php" method="get" class="navbar-form" role="search">
		<input type="search" name="user_query" class="form-control" placeholder="Search a Product">
		
		<button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search"></i></button>
	</form>
	</div>
	</div>
		
	<div class="container-fluid">
		<!-- Center products-->
		<div class="col-md-3"></div>
		
		

		<!-- Main Products-->
		<div class="col-md-8">
			<div class = "row"></div>
			<h2 class ="text-center">Toy Library</h2>
			<?php while($product=mysqli_fetch_array($result)):    ?>
				<div class="col-md-3">
					<h4><?=$product['Title'];?></h2>
						<img src="<?=$product['Image'];?>" alt="<?=$product['Title'];?>"  id="images" class="product-img" style="margin-right:15px;"></img>
						<p></p>
						<p class="list-price text-danger">Points: <?=$product['Points']; ?>

						</p>
						<form method="post" action="product.php">
							<input type="text" value="<?php echo $product['Id'] ?>" name="temp" hidden="true">
							<button type = "submit" name="details" class="btn btn-success btn-block" style="font-size:18px;">Details</button>
						</form>
					</div>
				


				<?php endwhile; ?>

			</div>





		</div>
		<footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 VMUniverse</footer>
	</body>
	</html>
	<div class="modal fade" id="details-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<p class=>
						<h2 class="modal-title text-center bg-info">Details</h2></p>
					</div>
					<div class="modal-body" id="product_details"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>



				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('.view_data').click(function(){
			var toy_id = $(this).attr("Id");

			$.ajax({
				url:"details-modal-car.php",
				method:"post",
				data:{toy_id:toy_id},
				success:function(data){
					$('#product_details').html(data);
					$('#details-1').modal("show");
				}
			});

		});
	});
	</script>
	
