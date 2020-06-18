<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Toy Universe</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>

<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: absolute;;
    z-index: 1;
    top: 30px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 100px;
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

}
#main {
    transition: margin-left .9s;
    padding: 70px;
    top: 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
  

<div id="mySidenav" class="sidenav" clas="glyphicon glyphicon-list">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<h2>Panel</h2>
  	<a href="admin/dashboard.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-dashboard"></span> Dashboard
         
        </a>

</div>
<p></p>
<p></p>
<div id="main">

    <span style="font-size:30px;cursor:pointer; top:10px;" onclick="openNav()">&#9776; Panel</span>
</div>

<script>
$(document).ready(function () {
    $('.nav ul li:first').addClass('active');
    $('.tab-content:not(:first)').hide();
    $('.nav ul li a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.tab-content').hide();
    });
});
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
