<?php
if(isset($_POST["toy_id"]))
{
  $output = '';
  $connect = mysqli_connect("localhost", "root", "", "toy_universe");
    $sql="SELECT * FROM featured_products WHERE id = '".$_POST['toy_id']."'";
    
    $result = mysqli_query($connect, $sql);




   $output .= '
  <div class="table-responsive">
  <table class="table table-bordered">';
  while ($product = mysqli_fetch_array($result))
  {
    $output .= '
    <tr>
      <td width="30%"><label>Name</label></td>
      <td width="70%">'.$product['code'].'</td>
    </tr>
    <tr>
      <td width="30%"><label>Name</label></td>
      <td width="70%">'.$product['title'].'</td>
    </tr>
    <tr>
      <td width="30%"><label>Image</label></td>
      <td width="70%"><img src="'.$product["image"].'"width="200" height="200"></td>
    </tr>
    <tr>
      <td width="30%"><label>Price</label></td>
      <td width="70%">'.$product['points'].'</td>
    </tr>
    <tr>
      <td width="30%"><label>Category</label></td>
      <td width="70%">'.$product['category'].'</td>
    </tr>
    <tr>
      <td width="30%"><label>Description</label></td>
      <td width="70%">'.$product['description'].'</td>
    </tr>
      ';
      }

  $output .= "</table></div>";
  echo $output;
}
?>
