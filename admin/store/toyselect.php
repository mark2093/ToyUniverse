 <?php
 if(isset($_POST["user_id"]))
 {
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "toy_universe");
      $query = "SELECT * FROM store_toys WHERE St_id = '".$_POST["user_id"]."'";
      $result = mysqli_query($connect, $query);
      
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
           <tr>
                <td width="30%"><label>Code</label></td>
                <td width="70%">'.$row["St_code"].'</td>
           </tr>
                <tr>
                     <td width="30%"><label>Name</label></td>
                     <td width="70%">'.$row["St_name"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Image</label></td>
                     <td width="70%">'.$row["St_image"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Image1</label></td>
                     <td width="70%">'.$row["St_image1"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Price</label></td>
                     <td width="70%">'.$row["St_price"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Category</label></td>
                     <td width="70%">'.$row["St_category"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Description</label></td>
                     <td width="70%">'.$row["St_description"].'</td>
                </tr>


           ';
      }
      $output .= '
           </table>
      </div>
      ';
      echo $output;
 }
 ?>
