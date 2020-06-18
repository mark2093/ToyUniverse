<?PHP

$db = new pdo('mysql:host=localhost;dbname=toy_universe','root','');

session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Toy Universe</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/main.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="../js/jquery-3.1.1.js"/></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><img src="../images/toy-universe-logo.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/ToyUniverse/index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Store <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Toys</a></li>
          <li><a href="#">Books</a></li>
         </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Library <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../../librarytoys.php">Toys</a></li>
          <li><a href="../../librarybooks.php">Books</a></li>
          <li><a href="../../membership.php">Membership Plans</a></li>
          <li><a href="guide.php">Guide</a></li>
        </ul>
      </li>
      <li><a href="../../About Us.php">About Us</a></li>
      <li><a href="#">FAQ</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">

    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<?php if(!isset($_SESSION['id'])){ ?>
        Guest<span class="caret"></span></a>

        <ul class="dropdown-menu">

        <li><a href="LoginPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="RegisterPage.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>


</ul>
  <?php }else{(isset($_SESSION['id'])) ?>

            <?php if($_SESSION['role']=='Member'){
            ?>
            User <span class="caret"></span></a>
            <ul class="dropdown-menu">

            <li><a href="Userdetails.php">Account</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      <?php
        }else{
        ?>
           Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="../dash.php">Dashboard</a></li>
          <li><a href="../../Userdetails.php">Account</a></li>
          <li role="separator" class="divider"></li>

          <li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>






       <?php }}?>


    </ul>
  </div>
</nav>









</body>
</html>
