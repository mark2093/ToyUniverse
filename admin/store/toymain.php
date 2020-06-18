<?php include 'header.php'; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "toy_universe");
$query = "SELECT * FROM store_toys ";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Toys</title>

  <link rel="stylesheet" href="../css/addusers.css"/>
  <link rel="stylesheet" href="../css/font-awesome.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">





</head>
<body >
  <div>
    <div id="image-6">

      <div class="container" style="width:700px;">
        <h1 align="center" style="font-family:Georgia, serif;font-size:70px;"><span class="label label-info"><u><b>Add Products</b></u></span></h1>
        <br />
        <div class="table-responsive">
          <div align="right">
            <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-danger btn-lg active">Add</button>
          </div>
          <br />
          <div id="user_table">
            <table class="table table-hover"  border="10px">
              <tr class="success">
                <th width="15%" class="info">Code</th>
                <th width="45%" class="info">Proctct Name</th>
                <th width="10%">View</th>
              </tr>
              <?php
              while($row = mysqli_fetch_array($result))
              {
                ?>
                <tr>
                  <td class="warning"><?php echo $row["St_code"]; ?></td>
                  <td class="danger"><?php echo $row["St_name"]; ?></td>
                  <td><input type="button" name="view" value="view" id="<?php echo $row["St_id"]; ?>" class="btn btn-primary btn-md view_data" /></td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button type="button" class="btn btn-primary btn-lg text-center" onClick="window.location='storemgt.php';">Back</button>
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
        <h4 class="modal-title">Product Details</h4>
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
          <label>Enter Code</label>
          <input type="text" name="code" id="code" class="form-control" />
          <br />
          <label>Enter Product Name</label>
          <input type="text" name="name" id="name" class="form-control" />
          <br />

          <label>Enter Image</label>
          <input type="text" name="image" id="image" class="form-control" />
          <br />

          <label>Enter Image1</label>
          <input type="text" name="image1" id="image1" class="form-control" />
          <br />

          <label>Enter Price</label>
          <input type="text" name="price" id="price" class="form-control" />
          <br />

          <label>Enter Category</label>
          <input type="text" name="cat" id="cat" class="form-control" />
          <br />
          <label>Enter Description</label>
          <input type="text" name="desci" id="desci" class="form-control" />
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
    if($('#code').val() == "")
    {
      alert("Only Number Please");
    }
    if($('#name').val() == "")
    {
      alert("Name is required");
    }
    else if($('#price').val() == '')
    {
      alert("Price is required");
    }
    else if($('#cat').val() == '')
    {
      alert("Category");
    }
    else if($('#desci').val() == '')
    {
      alert("Description is required");
    }
    else
    {
      $.ajax({
        url:"toyinsert.php",
        method:"POST",
        data:$('#insert_form').serialize(),
        beforeSend:function(){
          $('#insert').val("Inserting");
        },
        error:function(data){
          $('#insert_form')[0].reset();
          $('#add_data_Modal').modal('show');
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
        url:"toyselect.php",
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