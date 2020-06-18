<?php include 'header.php'; ?>
<?php
if(!isset($_REQUEST['id'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Success</title>
  <meta charset="utf-8">
  <style>
  .container{width: 100%;padding: 50px;}
  p{color: #34a853;font-size: 18px;}
  </style>
</head>
</head>
<body>
  <div class="container">
    <div class="alert alert-success">
      <h1><strong><u>Order Status</u></strong></h1>
      <p><strong>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?>
      <?php  ?> </strong></p>
    </div>
    <a href="librarytoys.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
  </div>
  </body>
  </html>
