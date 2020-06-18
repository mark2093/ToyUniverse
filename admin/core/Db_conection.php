<?php

    $dbcon=mysqli_connect('127.0.0.1','root','','toy_universe');
    if(mysqli_connect_error()) {
    echo'Database_connection_failed with the following'.mysqli_connect_error();
    die();
}
?>
