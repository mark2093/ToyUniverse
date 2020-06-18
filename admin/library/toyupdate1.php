<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Users</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">


</head>
<body >
  <?php
  if(isset($_POST['mcode'])){
    $mcode=$_POST["mcode"];

    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $query = "SELECT * FROM lib_products WHERE Code = '".$mcode."'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)!=0){
      while ($rows = mysqli_fetch_array($result)){
        $code = $rows['Code'];
        $name = $rows['Title'];
        $image = $rows['Image'];
        $image1 = $rows['Image1'];
        $points = $rows['Points'];
        $cat = $rows['Category'];
        $desci = $rows['Description'];
      }
    }
    else{ ?>

      <script>
      alert('Product not found');
      window.location.href='toyupdate.php';
      </script>";
      <?php
    }
  }
  if(isset($_POST['update'])){
    //  $cemail=$_POST["cemail"];
    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $code = $_POST['code'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $image1 = $_POST['image1'];
    $points = $_POST['points'];
    $cat = $_POST['cat'];
    $desci = $_POST['desci'];
    $mcode = $_POST['mcode'];
    $query = "UPDATE lib_products SET Code='$_POST[code]',Title='$_POST[name]',Image='$_POST[image]',Image1='$_POST[image1]',Points='$_POST[points]',Category='$_POST[cat]',Description='$_POST[desci]' WHERE Code='$_POST[mcode]'";
    $result = mysqli_query($connect, $query);


    if($result)
    {
      ?>

    <script>
    alert('Product Details Update');
    window.location.href='toyupdate.php';
    </script>";

    <?php
  }
  }
  ?>



  <div>
    <div id="image-7" style="height:700px;">
      <br /><br />
      <div class="container" style="width:700px;">
        <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-info"><u><b>Update Products</b></u></span></h1>
        <br />
        <form action="toyupdate1.php" method="POST">
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
              <h4><span class="label label-primary">Product Points</span></h4>
              <input type="text" class="form-control" name="points" value="<?php echo $points; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Category</span></h4>
              <input type="text" class="form-control" name="cat"  value="<?php echo $cat; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Product Description</span></h4>
              <input type="text" class="form-control" name="desci"  value="<?php echo $desci; ?>" />
            </div>
            <button type="submit" class="btn btn-danger btn-lg" name="update">Update</button>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='libmgt.php';">Back</button>
          </form>
        </div>



        <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
      </body>
      </html>
