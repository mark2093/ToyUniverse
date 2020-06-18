 <?php
 if(isset($_POST["user_id"]))
 {
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "toy_universe");
      $query = "SELECT * FROM lib_products WHERE Id = '".$_POST["user_id"]."'";
      $result = mysqli_query($connect, $query);

      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
           <tr>
                <td width="30%"><label>Code</label></td>
                <td width="70%">'.$row["Code"].'</td>
           </tr>
                <tr>
                     <td width="30%"><label>Name</label></td>
                     <td width="70%">'.$row["Title"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Image</label></td>
                     <td width="70%">'.$row["Image"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Image1</label></td>
                     <td width="70%">'.$row["Image1"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Price</label></td>
                     <td width="70%">'.$row["Points"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Category</label></td>
                     <td width="70%">'.$row["Category"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Description</label></td>
                     <td width="70%">'.$row["Description"].'</td>
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
