<?php
if(isset($_Post["toys_id"]))
{
  $output ='';
  $db=mysqli_connect('127.0.0.1','root','','toy_universe');
  $sql="SELECT * FROM lib_products WHERE Id = '".$_Post["toys_id"]."'";
  $result = mysqli_query($db,$sqlm);

  while ($row = mysqli_fetch_array($result)) {
    <h4 class="modal-title text-center">.$row["Title"] </h4>
  }
}

<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/form-elements.css"/>
