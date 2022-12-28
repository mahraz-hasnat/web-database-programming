<?php
$con = mysqli("localhost","root","","contactinfo")
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
?>