

 <?php
 $connect = mysqli_connect("localhost", "root", "", "toy_universe");

 if(!empty($_POST))
 {
      $output = '';
      $code = mysqli_real_escape_string($connect, $_POST["code"]);
      $name = mysqli_real_escape_string($connect, $_POST["name"]);
      $image = mysqli_real_escape_string($connect, $_POST["image"]);
      $image1 = mysqli_real_escape_string($connect, $_POST["image1"]);
      $price = mysqli_real_escape_string($connect, $_POST["price"]);
      $cat = mysqli_real_escape_string($connect, $_POST["cat"]);
      $desci = mysqli_real_escape_string($connect, $_POST["desci"]);
      $check_code_query="SELECT * FROM store_books WHERE B_code='$code'";
         $run_query=mysqli_query($connect,$check_code_query);

         if(mysqli_num_rows($run_query)>0)
       {
         echo "<script>alert('Dupe Code $code')
         window.location.href='bookmain.php';</script>";
        }
         else{

      $query = "
      INSERT INTO store_books(B_code,B_name, B_image,B_image1, B_price, B_category, B_description)
      VALUES('$code','$name', '$image','$image1', '$price', '$cat', '$desci');
      ";
      if(mysqli_query($connect, $query))
      {
           $output .= '<label class="text-success">Data Inserted</label>';
           $select_query = "SELECT * FROM store_books ORDER BY B_id DESC";
           $result = mysqli_query($connect, $select_query);
           $output .= '
           <div class="table-responsive">
                <table class="table table-bordered">';
           $output .= '

                     <tr>
                          <th width="20%">Code</th>
                          <th width="70%">Book Name</th>
                          <th width="10%">View</th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tr>
                          <th>' . $row["B_code"] . '</th>
                          <th>' . $row["B_name"] . '</th>
                          <th><input type="button" name="view" value="view" id="' . $row["B_id"] . '" class="btn btn-info btn-md view_data" /></th>
                     </tr>
                ';
           }
           $output .= '</table> </div>';
      }
      echo $output;
 }}
 ?>
