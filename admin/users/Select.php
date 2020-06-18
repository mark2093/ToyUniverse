 <?php
 if(isset($_POST["user_id"]))
 {
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "toy_universe");
      $query = "SELECT * FROM users WHERE id = '".$_POST["user_id"]."'";
      $result = mysqli_query($connect, $query);

      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>First Name</label></td>
                     <td width="70%">'.$row["fname"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Last Name</label></td>
                     <td width="70%">'.$row["lname"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Email</label></td>
                     <td width="70%">'.$row["email"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Points</label></td>
                     <td width="70%">'.$row["points"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Password</label></td>
                     <td width="70%">'.$row["pass"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Role</label></td>
                     <td width="70%">'.$row["role"].'</td>
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
