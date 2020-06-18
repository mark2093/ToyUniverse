<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
?>
<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
  .container{padding: 50px;}
  input[type="number"]{width: 20%;}
  </style>
  <script>
  function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
      if(data == 'ok'){
        location.reload();
      }else{
        alert('Cart update failed, please try again.');
      }
    });
  }
  </script>
</head>
</head>
<body>
  <div class="container">
    <h1><u>Shopping Cart</u></h1>
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Points</th>
          <th>Quantity</th>
          <th>Subtotal</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if($cart->total_items() > 0){
          //get cart items from session
          $cartItems = $cart->contents();
          foreach($cartItems as $item){
            ?>
            <tr>
              <td><?php echo $item["Title"]; ?></td>
              <td><?php echo $item["Points"].' Points'; ?></td>
              <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
              <td><?php echo $item["subtotal"].' Points'; ?></td>
              <td>
                <a href="cartActionlp.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <?php } }else{ ?>
              <tr><td colspan="5"><p>Your cart is empty.....</p></td>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td><a href="librarytoys.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
                  <td colspan="2"></td>
                  <?php if($cart->total_items() > 0){ ?>
                    <td class="text-center"><strong>Total <?php echo $cart->total().' Points'; ?></strong></td>
                    <?php if(isset($_SESSION['id'])){
                      $id = $_SESSION['id'];
                      $mpt=$cart->total();
                      $sql="SELECT * FROM users WHERE id='$id'";
                      $result=mysqli_query($connect,$sql);
                      while ($rows = mysqli_fetch_assoc($result)){
                        $pts = $rows['points'];
                        if($pts<$mpt){?>
                          <div class="alert alert-danger">
                            <strong>Your Current Points Balance is: <?php echo "$pts";?> And Your Total Cart Value Is: <?php echo "$mpt";?> </strong><br>
                            <strong>Sorry You Don't Have Enough Points To Rent So Many</strong> <br> <a href="membership.php" class="alert-link">Click here to Add</a>.<br> </div>

                          <?php }else{ ?>

                          <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
                              <?php }}}} ?>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </body>
                    </html>
