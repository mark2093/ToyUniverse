<?php
if(isset($_Post["toys_id"]))
{
  $output ='';
  $db=mysqli_connect('127.0.0.1','root','','toy_universe');
  $sql="SELECT * FROM lib_products WHERE Id = '".$_POST["toys_id"]."'";
  $result = mysqli_query($db,$sqlm);
	$output .='

<div class="modal fade" id="details-100" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button"class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
while ($row = mysqli_fetch_array($result)){
		$output .='
	<h4 class="modal-title text-center">'.$row["Title"].'</h4>
</div>
	<div class="modal-body" id="product_details">
		<div class="container-fluid">
			<div class="rows">
				<div class="col-sm-6">
					<div class="center-block">
					<img src="'.$row["Title"].'"alt="racingcar" class="details img-responsive"/> </img>
					</div>
				</div>

					<div class="col-sm-6">
					<h4>Details</h4>
					<p> '.$row["Description"].'</p>
					<hr/>
					<p>Price:'.$row["Price"].'</p>
					<p>Age:'.$row["Catergory"].'</p>

					<form action="add-to-cart.php" method="post">
					<div class="form-group">
					<div class="col-xs-3">
					<label for="quantity" id="quantity-label">Quantity</label>
					<input type="text" class="form-control" id="quantity" name="quantity"/>
					<div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 </div>
					</div>

					</div>


			</div>
		</div>
	</div>
</div>
</div>
</div>';
}
}
?>
