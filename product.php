<?php include 'header.php'; ?>
<?php
if(isset($_POST['temp'])){
  $temp=$_POST["temp"];
  $connect = mysqli_connect("localhost", "root", "", "toy_universe");
  $sql="SELECT * FROM lib_products WHERE Id = '".$temp."'";
  $result = mysqli_query($connect, $sql);
  while ($product = mysqli_fetch_array($result)):
    $mpt=$product['Points'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Toy Universe</title>
      <link rel="stylesheet" href="css/product.css"/>
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/main.css"/>

      <script src="js/jquery-3.1.1.js"/></script>

    </head>

    <body>

      <div class="container">
        <div class="card">
          <div class="container-fliud">
            <div class="wrapper row">
              <div class="preview col-md-6">

                <div class="preview-pic tab-content">
                  <div class="tab-pane active" id="pic-1"><img src="<?=$product['Image'];?>" /></div>
                  <div class="tab-pane" id="pic-2"><img src="<?=$product['Image1'];?>" /></div>
                  <div class="tab-pane" id="pic-3"><img src="" /></div>
                  <div class="tab-pane" id="pic-4"><img src="" /></div>
                  <div class="tab-pane" id="pic-5"><img src="" /></div>
                </div>
                <ul class="preview-thumbnail nav nav-tabs">
                  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?=$product['Image'];?>" /></a></li>
                  <li><a data-target="#pic-2" data-toggle="tab"><img src="<?=$product['Image1'];?>" /></a></li>
                  <li><a data-target="#pic-3" data-toggle="tab"><img src="" /></a></li>
                  <li><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                  <li><a data-target="#pic-5" data-toggle="tab"><img src="" /></a></li>
                </ul>

              </div>
              <div class="details col-md-6">
                <h3 class="product-title"><?=$product['Title'];?></h3>
                <p class="product-description"><?=$product['Description'];?></p>
                <p class="product-category"><b>Category:</b> <?=$product['Category'];?></p>
                <h4 class="price">Points: <b><span><?=$product['Points'];?></span></b></h4>

                <div class="action">
                  <?php if(!isset($_SESSION['id'])){ ?>
                    <?php echo "Please sign in"; ?>
                    <button type="button" class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart disabled" type="button">Add To Cart</button>
                    <?php } ?>
                    <?php if(isset($_SESSION['id'])){
                      $id = $_SESSION['id'];
                      $sql="SELECT * FROM users WHERE id='$id'";
                      $result=mysqli_query($connect,$sql);
                      while ($rows = mysqli_fetch_assoc($result)){
                        $pts = $rows['points'];
                        if($pts<$mpt){?>
                          <div class="alert alert-danger">
                            <strong>Your Current Points Balance is:</strong> <?php echo "$pts";?> <br>
                            <strong>Sorry Not Enough Points To Rent This Item</strong> <br> <a href="membership.php" class="alert-link">Click here to Add</a>.<br> </div>
                            <button type="button" class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart disabled" type="button">Add To Cart</button>

                            <?php }else{ ?>
                              <div class="alert alert-success">
                                <strong>Your Current Points Balance is:</strong> <b><?php echo "$pts";?> <br></b>
                                <strong>You Have Enough Points To Rent </strong> <br>
                              </div>

                                <a class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart" href="cartActionlp.php?action=addToCart&id=<?php echo $product["Id"]; ?>">Add To Cart </a>

                              <?php }

                            }
                          }
                          ?>
                        </div>

                      </div>
                    <?php endwhile; }?>
                  </div>
                </div>
              </div>
            </div>
          </body>
          </html>
