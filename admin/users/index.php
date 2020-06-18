 index.php

 <?php
 $connect = mysqli_connect("localhost", "root", "", "toy_universe1");
 $query = "SELECT * FROM users";
 $result = mysqli_query($connect, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>ToyUniverse</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body>
           <br /><br />
           <div class="container" style="width:700px;">
                <h3 align="center">Insert users into the database</h3>
                <br />
                <div class="table-responsive">
                     <div align="right">
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
                     </div>
                     <br />
                     <div id="user_table">
                          <table class="table table-bordered">
                               <tr>
                                    <th width="70%">User Name</th>
                                    <th width="30%">View</th>
                               </tr>
                               <?php
                               while($row = mysqli_fetch_array($result))
                               {
                               ?>
                               <tr>
                                    <td><?php echo $row["Fullname"]; ?></td>
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                               </tr>
                               <?php
                               }
                               ?>
                          </table>
                     </div>
                </div>
           </div>
      </body>
 </html>
 <div id="dataModal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">User Details</h4>
                </div>
                <div class="modal-body" id="user_detail">
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>
 <div id="add_data_Modal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Insert </h4>
                </div>
                <div class="modal-body">
                     <form method="post" id="insert_form">
                          <label>Enter First Name</label>
                          <input type="text" name="fname" id="fname" class="form-control" />
                          <br />

                          <label>Enter Last Name</label>
                          <input type="text" name="lname" id="lname" class="form-control" />
                          <br />

                          <label>Enter Address</label>
                          <textarea name="addr" id="addr"></textarea> 
                          <br />

                           <label>Enter Email Id</label>
                          <input type="text" name="email" id="email" class="form-control" />
                          <br />

                          <label>Enter Temporary Password</label>
                          <input type="Password" name="pass" id="pass" class="form-control" />
                         <br />


                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                     </form>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>
 <script>
 $(document).ready(function(){
      $('#insert_form').on("submit", function(event){
           event.preventDefault();
           if($('#fname').val() == "")
           {
                alert("First Name is required");
           }
           else if($('#lname').val() == '')
           {
                alert("Last Name is required");
           }
           else if($('#email').val() == '')
           {
                alert("Email is required");
           }
           else if($('#pass').val() == '')
           {
                alert("Password is required");
           }
           else
           {
                $.ajax({
                     url:"insert.php",
                     method:"POST",
                     data:$('#insert_form').serialize(),
                     beforeSend:function(){
                          $('#insert').val("Inserting");
                     },
                     success:function(data){
                          $('#insert_form')[0].reset();
                          $('#add_data_Modal').modal('hide');
                          $('#user_table').html(data);
                     }
                });
           }
      });
      $(document).on('click', '.view_data', function(){
           var user_id = $(this).attr("id");
           if(user_id != '')
           {
                $.ajax({
                     url:"select.php",
                     method:"POST",
                     data:{user_id:user_id},
                     success:function(data){
                          $('#user_detail').html(data);
                          $('#dataModal').modal('show');
                     }
                });
           }
      });
 });
 </script>
<!--  -->
