<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Delete Product</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">


</head>
<body >
  <?php
  if(isset($_POST['mcode'])){
    $mcode=$_POST["mcode"];

    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $query = "SELECT * FROM store_toys WHERE St_code = '".$mcode."'";
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result)!=0){
      while ($rows = mysqli_fetch_array($result)){
        $code = $rows['St_code'];
        $name = $rows['St_name'];
        $image = $rows['St_image'];
        $image1 = $rows['St_image1'];
        $price = $rows['St_price'];
        $cat = $rows['St_category'];
        $desci = $rows['St_description'];
    }
  }
  else{ ?>

<script>
alert('Product not found');
window.location.href='toydelete.php';
</script>";

<?php

  }

}

  if(isset($_POST['delete'])){
  //  $cemail=$_POST["cemail"];
  $connect = mysqli_connect("localhost", "root", "","toy_universe");
  $code = $_POST['code'];
  $name = $_POST['name'];
  $image = $_POST['image'];
  $image1 = $_POST['image1'];
  $price = $_POST['price'];
  $cat = $_POST['cat'];
  $desci = $_POST['desci'];
  $mcode = $_POST['mcode'];
  $query = "DELETE from store_toys WHERE St_code='$_POST[mcode]'";
  $result = mysqli_query($connect, $query);


  if($result)
  {
    ?>

  <script>
  alert('Product Deleted');
  window.location.href='toydelete.php';
  </script>";

  <?php
  }

}
  ?>


  <div>
    <div id="image-6" style="height:700px;">
      <br /><br />
      <div class="container" style="width:700px;">
        <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-danger"><u><b>Delete Products</b></u></span></h1>
        <br />
        <form action="toydelete1.php" method="POST">
          <div class="form-group">
            <input type="text" name="mcode" value="<?php echo $mcode; ?>" hidden="true" />
            <div class="form-group">
              <h4><span class="label label-primary">Product Code</span></h4>
              <input type="text" class="form-control" name="code" value="<?php echo $code; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Name</span></h4>
              <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Image</span></h4>
              <input type="text" class="form-control" name="image" value= "<?php echo $image; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Image1</span></h4>
              <input type="text" class="form-control" name="image1" value= "<?php echo $image1; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Price</span></h4>
              <input type="text" class="form-control" name="price" value="<?php echo $price; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Category</span></h4>
              <input type="text" class="form-control" name="cat"  value="<?php echo $cat; ?>" />
            </div>
            <div class="form-group">
            <h4><span class="label label-primary">Product Description</span></h4>
              <input type="text" class="form-control" name="desci"  value="<?php echo $desci; ?>" />
            </div>
            <button type="submit" class="btn btn-danger btn-lg" name="delete">Delete</button>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='storemgt.php';">Back</button>
          </form>
        </div>


      <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
    </body>
    </html>
