<!--Login Code -->

<!DOCTYPE HTML>
<html>
<head>
  <title>Toy Universe</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1 user-scaleable=no">
  <script src="js/jquery-3.1.1.js"/></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
$db = new pdo('mysql:host=localhost;dbname=toy_universe','root','');

    if(isset($_POST['email']) && isset($_POST['pass'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $stmt = $db->prepare("SELECT * FROM login WHERE email=? AND pass=? ");
      //$stmt->bind_Param('ss', $email,$pass);
      $stmt->bindParam(1, $email);
      $stmt->bindParam(2, $pass);
      $stmt->execute();
      $row = $stmt->fetch();
      $emailid = $row['email'];
      $password = $row['pass'];
      $id = $row['Id'];
      $role = $row['role'];
//echo($row);
      if($email==$emailid && $password==$pass){
        session_start();
        $_SESSION['email'] = $emailid;
        $_SESSION['pass'] = $password;
        $_SESSION['id'] = $id;
        $_SESSION['role'] = $role;
        echo ($email);
        echo ($pass);
        echo "Successful";
      ?>

    <script>window.location.href='index.php'</script>
      <?php
      }else{

        ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong> Email OR Password is Wrong.
</div>
<?php
      } 
    }

?>
</body>
</html>
