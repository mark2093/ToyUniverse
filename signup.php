<?php

//include 'core/init.php' ;
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not Connected';
}
if(!mysqli_select_db($con,'toy_universe'))
{
    echo('DB Not Selected');
}
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

//here query check weather if user already registered so can't register again.
    $check_email_query="SELECT * FROM users WHERE email='$email'";
    $run_query=mysqli_query($con,$check_email_query);

 if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";
exit();
    }

    $sql="INSERT INTO users (fname, lname, email, pass) VALUES ('$fname','$lname','$email','$pass')";

if(!mysqli_query($con, $sql))
{
    echo 'Not inserted';
}
else
{
    echo"<script>alert('Accout Created!')</script>";
}
header("location:index.php?status=success");

/*echo "$sql";
if(empty($result))
{
  echo("Account Not Created");

}
else
{
  echo("Account created");
  echo "$sql";
}

*/
 
?>
