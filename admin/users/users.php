<?php include 'header.php'; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
$query = "SELECT * FROM users ";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Users</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">





</head>
<body >
  <div>
    <div id="image-5">
      <br /><br />
      <div class="container" style="width:700px;">
      <h1 align="center" style="font-family:Georgia, serif;font-size:70px;"><span class="label label-primary"><u><b>Add Users</b></u></span></h1>

        <div class="table-responsive">
          <div align="right">
            <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-danger btn-lg active">Add</button>
          </div>

          <div id="user_table">
            <table class="table table-hover"  border="10px">
              <tr class="success">
                <th width="45%" class="info">Full Name</th>
                <th width="45%" class="warning">Email</th>
                <th width="10%">View</th>
              </tr>
              <?php
              while($row = mysqli_fetch_array($result))
              {
                ?>
                <tr>
                  <td class="warning"><?php echo $row["fname"],' ',$row["lname"]; ?></td>
                  <td class="danger"><?php echo $row["email"] ?></td>
                  <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-primary btn-md view_data" /></td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='usermgt.php';">Back</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="navbar-fixed-bottom text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
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
          <textarea name="addr" id="addr" class="form-control"></textarea> 
          <br />

          <label>Enter Email Id</label>
          <input type="text" name="email" id="email" class="form-control" />
          <br />

          <label>Enter Password</label>
          <input type="Password" name="pass" id="pass" class="form-control" />
          <br />
          <label>Enter Number of Points</label>
          <input type="text" value ="0" name="points" id="points" class="form-control" />
          <br />
          <label>Select Role</label>
          <select name="role">
            <option value="1">Member</option>
            <option value="2">Admin</option>
          </select>
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


</div>
<script>
$(document).ready(function(){
  $('#insert_form').on("submit", function(event){
    event.preventDefault();
    if($('#fname').val() == "")
    {
      alert("First Name is required");
    }
    else if($('#uname').val() == '')
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
