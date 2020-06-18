<?php
include '../core/init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toy Universe</title>
	<!--
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/main.css"/>
	<link rel="stylesheet" href="../css/font-awesome.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
	<script src="../js/jquery-3.1.1.js"/></script>
	<script src="../js/bootstrap.min.js"></script>
-->
	<style>
	.form-group input[type="checkbox"] {
		display: none;
	}

	.form-group input[type="checkbox"] + .btn-group > label span {
		width: 20px;
	}

	.form-group input[type="checkbox"] + .btn-group > label span:first-child {
		display: none;
	}
	.form-group input[type="checkbox"] + .btn-group > label span:last-child {
		display: inline-block;
	}

	.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
		display: inline-block;
	}
	.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
		display: none;
	}
	body {
		font-family: "Lato", sans-serif;
	}

	.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 50px;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}

	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s
	}

	.sidenav a:hover, .offcanvas a:focus{
		color: #f1f1f1;
	}

	.sidenav .closebtn {
		position: absolute;
		top: 10px;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;


		#main {
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
		</style>
		<body>



			<div id="mySidenav" class="sidenav" clas="glyphicon glyphicon-list">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<h2>Admin Panel</h2>
				<a href="../dash.php" class="btn btn-info btn-lg">
					<span class="glyphicon glyphicon-dashboard"></span> Dashboard
				</a>
				<br>
				<a href="usermgt.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-user"></span> User
        </a>
				<br>
				<a href="../store/storemgt.php" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-credit-card"></span> Store
        </a>
				<br>
				<a href="../library/libmgt.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-book"></span> Library
        </a>
			</div>





			<div id="main">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			</div>

			<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
			}
			</script>
		</head>
	</body>
	</html>
