<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Book</title>

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
        $main = $rows['Main'];
        $prokey = $rows['Product_keywords'];
      }
    }
    else{ ?>

      <script>
      alert('Book not found');
      window.location.href='bookupdate.php';
      </script>";
      <?php
    }
  }
  if(isset($_POST['update'])){

    $connect = mysqli_connect("localhost", "root", "","toy_universe");
    $code = $_POST['code'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $image1 = $_POST['image1'];
    $points = $_POST['points'];
    $cat = $_POST['cat'];
    $desci = $_POST['desci'];
    $mcode = $_POST['mcode'];
    $prokey = $_POST['prokey'];
    $main = $_POST['main'];
    $query = "UPDATE lib_product SET Code='$_POST[code]',Title='$_POST[name]',Image='$_POST[image]',Image1='$_POST[image1]',Points='$_POST[points]',Category='$_POST[cat]',Description='$_POST[desci]',Product_keywords='$_POST[prokey]',Main='$_POST[main]' WHERE Lb_code='$_POST[mcode]'";
    $result = mysqli_query($connect, $query);


    if($result)
    {
      ?>

    <script>
    alert('Book Details Update');
    window.location.href='bookupdate.php';
    </script>";

    <?php
  }
  }
  ?>



  <div>
    <div id="image-7" style="height:auto;">
      <br /><br />
      <div class="container" style="width:700px;">
        <h1 align="center" style="font-family:Georgia, serif;font-size:40px;"><span class="label label-info"><u><b>Update Book</b></u></span></h1>
        <br />
        <form action="bookupdate1.php" method="POST">
          <div class="form-group">
            <input type="text" name="mcode" value="<?php echo $mcode; ?>" hidden="true" />
            <div class="form-group">
              <h4><span class="label label-primary">Book Code</span></h4>
              <input type="text" class="form-control" name="code" value="<?php echo $code; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Book Name</span></h4>
              <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" />
            </div>
            <div class="form-group">
            <h4><span class="label label-primary">Book Image</span></h4>
              <input type="text" class="form-control" name="image" value= "<?php echo $image; ?>" />
            </div>
            <h4><span class="label label-primary">Book Image1</span></h4>
              <input type="text" class="form-control" name="image1" value= "<?php echo $image1; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Book Poins</span></h4>
              <input type="text" class="form-control" name="points" value="<?php echo $points; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Book Category</span></h4>
              <input type="text" class="form-control" name="cat"  value="<?php echo $cat; ?>" />
            </div>
            <div class="form-group">
              <h4><span class="label label-primary">Book Description</span></h4>
              <input type="text" class="form-control" name="desci"  value="<?php echo $desci; ?>" />
            </div>

            <div class="form-group">
              <h4><span class="label label-primary">Search Keywords</span></h4>
              <input type="text" class="form-control" name="desci"  value="<?php echo $prokey; ?>" />
            </div>

            <div class="form-group">
              <h4><span class="label label-primary">Main</span></h4>
              <input type="text" class="form-control" name="desci"  value="<?php echo $main; ?>" />
            </div>

            <button type="submit" class="btn btn-danger btn-lg" name="update" onclick="return confirm('Are you sure?')">Update</button>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='libmgt.php';">Back</button>
          </form>
        </div>



        <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
      </body>
      </html>
