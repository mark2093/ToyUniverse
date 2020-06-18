<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		$db=mysqli_connect("localhost","root","","toy_universe");
		if(!$db)
		{
			die("Connection failed:".mysqli_connect_error());

		}
		$sql="SELECT * FROM users WHERE id='$id'";
		$result=mysqli_query($db,$sql);
		while ($rows = mysqli_fetch_assoc($result)){
			$fname = $rows['fname'];
			$lname = $rows['lname'];
			$addr = $rows['address'];
			$phone = $rows['phone'];
			$email = $rows['email'];
			$points = $rows['points'];
			$role = $rows['role'];
		}

	}
	
	?>
	<h1 align="center"><b><u><?php echo $fname;?> <?php echo $lname;?> Profile</b></u></h1><br>
	<div class="container-fluid">
		<div class="col-md-3"></div>
		<div class="col-md-8" align="center">
		<form action="Userdetails.php" method="POST">
		<?php
		if(isset($_POST['update'])){
    //  $cemail=$_POST["cemail"];
    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $query = "UPDATE users SET address='$_POST[addr]',phone='$_POST[phone]' WHERE Id='$_SESSION[id]'";

    $result1 = mysqli_query($connect, $query);

		$result1;
		if($result1)
    	{
      ?>

    	<div class="alert alert-success">
        <strong>User Details Updated:</strong>
        </div>
    	<?php
  }
 		}
  		?>
			<table class="table table-hover" border="10px">
				<tr class="success"><td class="col-md-2">First Name</td><td class="col-md-6"><?php echo $fname;?></td></tr>
				<tr class="info"><td class="col-md-2">Last Name</td><td><?php echo $lname;?></td></tr>

				<tr class="active"><td>Address</td><td><textarea class="form-control" name="addr" value=""><?php echo $addr;?></textarea></td></tr>

				<tr class="active"><td>Email</td><td><?php echo $email;?></td></tr>

				<tr class="active"><td>Phone</td>
				<td><input type="text" class ="form-control" maxlength="12" name="phone" value="<?php echo $phone;?>"> </td></tr>

				<tr class="active"><td>Points</td><td><?php echo $points;?></td></tr>
				<tr class="danger"><td>Role</td><td><?php echo $role;?></td></tr>
				
			</table>
			<button type="submit" class="btn btn-primary" name="update" >Update</button>
			</form>
		</div>
	</div>
	
	<footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 VMUniverse</footer>
</body>
</html>
