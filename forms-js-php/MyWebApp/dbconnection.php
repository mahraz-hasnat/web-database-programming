<?php

$con = mysqli_connect('localhost','root','','student_info');
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>