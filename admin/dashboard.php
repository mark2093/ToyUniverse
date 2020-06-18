<?php include 'C:\xampp\htdocs\ToyUniverse\core\headeradmin.php'; ?>
<?php include 'C:\xampp\htdocs\ToyUniverse\dashnavbar.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<script>
  <script>
    var btn = document.getElementById('add_user');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo $page; ?>';
    });
  </script>
  </head>
<body>


<div class="col-md-2"></div>
  <!-- Main -->
  <div class="col-md-8">
      <div class = "row"></div>
      <h2 class ="text-center">Admin Panel</h2>


		  <div class="col-md-3">
          <h4>Add Users</h4>
           <!--<button onClick="window.location='users.php';" value="Add" />-->
               <button class="btn btn-success" id="add_user" onClick="window.location='users.php';" value="Add">Add</a>
                 </button>
                
      </div>
      <div class="col-md-3">
          <h4>Add Toys To Store</h2>
               <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add</button>
      </div>
      <div class="col-md-3">
          <h4>Add Books To Store</h2>
               <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add</button>
      </div>
      <div class="col-md-3">
          <h4>Add Toys To Library</h2>
               <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add</button>
      </div>
      <div class="col-md-3">
          <h4>Add Books To Library</h2>
               <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add</button>
      </div>



  <div id="background-image">
      <div id="image-1"></div>
      <div id="image-2"></div>
  </div>

  <footer class="text-center" id="footer">&copy; Copyright 2016-2017 MVUniverse</footer>
</body>
</html>
