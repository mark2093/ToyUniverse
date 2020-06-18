

 <?php
 $connect = mysqli_connect("localhost", "root", "", "toy_universe");

 if(!empty($_POST))
 {
      $output = '';
      $code = mysqli_real_escape_string($connect, $_POST["code"]);
      $name = mysqli_real_escape_string($connect, $_POST["name"]);
      $image = mysqli_real_escape_string($connect, $_POST["image"]);
      $image1 = mysqli_real_escape_string($connect, $_POST["image1"]);
      $points = mysqli_real_escape_string($connect, $_POST["points"]);
      $cat = mysqli_real_escape_string($connect, $_POST["cat"]);
      $desci = mysqli_real_escape_string($connect, $_POST["desci"]);
      $check_code_query="SELECT * FROM lib_products WHERE Code='$code'";
         $run_query=mysqli_query($connect,$check_code_query);

         if(mysqli_num_rows($run_query)>0)
       {
         echo "<script>alert('Dupe Code $code')
         window.location.href='toymain.php';</script>";
        }
         else{

      $query = "
      INSERT INTO lib_products(Code, Title, Image, Image1, Points, Category, Description)
      VALUES('$code','$name', '$image', '$image1', '$points', '$cat', '$desci');
      ";
      if(mysqli_query($connect, $query))
      {
           $output .= '<label class="text-success">Data Inserted</label>';
           $select_query = "SELECT * FROM lib_products ORDER BY Id DESC";
           $result = mysqli_query($connect, $select_query);
           $output .= '
           <div class="table-responsive">
                <table class="table table-bordered">';
           $output .= '

                     <tr>
                          <th width="20%">Code</th>
                          <th width="70%">Name</th>
                          <th width="10%">View</th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tr>
                          <th>' . $row["Code"] . '</th>
                          <th>' . $row["Title"] . '</th>
                          <th><input type="button" name="view" value="view" id="' . $row["Id"] . '" class="btn btn-info btn-md view_data" /></th>
                     </tr>
                ';
           }
           $output .= '</table> </div>';
      }
      echo $output;
 }}
 ?>
