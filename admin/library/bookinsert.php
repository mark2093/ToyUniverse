

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
      $main = mysqli_real_escape_string($connect, $_POST["main"]);
      $prokey = mysqli_real_escape_string($connect, $_POST["prokey"]);
      $check_code_query="SELECT * FROM lib_books WHERE Lb_code='$code'";
         $run_query=mysqli_query($connect,$check_code_query);

         if(mysqli_num_rows($run_query)>0)
       {
         echo "<script>alert('Dupe Code $code')
         window.location.href='bookmain.php';</script>";
        }
         else{

      $query = "
      INSERT INTO lib_products(Code, Title, Image, Image1, Points,Product_keywords, Category, Description,Main)
      VALUES('$code','$name', '$image','$image1','$points','$prokey', '$cat', '$desci', '$main');
      ";
      if(mysqli_query($connect, $query))
      {
           $output .= '<label class="text-success">Data Inserted</label>';
           $select_query = "SELECT * FROM lib_products WHERE Main=1 ORDER BY Id DESC ";
           $result = mysqli_query($connect, $select_query);
           $output .= '
           <div class="table-responsive">
                <table class="table table-bordered">';
           $output .= '

                     <tr>
                          <th width="20%" class ="active">Code</th>
                          <th width="70%" class ="active">Book Name</th>
                          <th width="10%" class ="active">View</th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tr>
                          <th class="active">' . $row["Code"] . '</th>
                          <th class ="active">' . $row["Title"] . '</th>
                          <th ><input type="button" name="view" value="view" id="' . $row["Id"] . '" class="btn btn-info btn-md view_data" /></th>
                     </tr>
                ';
           }
           $output .= '</table> </div>';
      }
      echo $output;
 }}
 ?>
