<?php
    $con= new mysqli($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASS'],$_ENV['DB_SCHEMA'])or die("Could not connect to mysql".mysqli_error($con));
?>

