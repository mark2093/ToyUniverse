

 <?php
 $connect = mysqli_connect("localhost", "root", "", "toy_universe");

 if(!empty($_POST))
 {
      $output = '';
      $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
      $lname = mysqli_real_escape_string($connect, $_POST["lname"]);
      $addr = mysqli_real_escape_string($connect, $_POST["addr"]);
      $email = mysqli_real_escape_string($connect, $_POST["email"]);
      $pass = mysqli_real_escape_string($connect, md5($_POST["pass"]));
      $points = mysqli_real_escape_string($connect, $_POST["points"]);
      $role = mysqli_real_escape_string($connect, $_POST["role"]);

   $check_email_query="SELECT * FROM users WHERE email='$email'";
      $run_query=mysqli_query($connect,$check_email_query);

      if(mysqli_num_rows($run_query)>0)
    {
    echo "<script>alert('Email $email is already exist in our database')
    window.location.href='users.php';</script>";

      }
      else{
      $query = "
      INSERT INTO users(fname, lname, address,  email, pass,points,role)
      VALUES('$fname', '$lname', '$addr', '$email', md5('$pass'), '$points', '$role');
      ";
      if(mysqli_query($connect, $query))
      {
           $output .= '<label class="text-success">Data Inserted</label>';
           $select_query = "SELECT * FROM users ORDER BY id DESC";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered">
                     <tr>
                          <th width="70%">Full Name</th>
                          <th width="30%">View</th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tr>
                          <td>' . $row["fname"].' '.$row["lname"]  . '</td>
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
                     </tr>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 }
 ?>
