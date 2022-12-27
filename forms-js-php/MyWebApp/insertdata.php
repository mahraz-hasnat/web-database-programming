<?php
 include 'dbconnection.php';
 $name=$_POST['name'];
 $Phn=$_POST['phnNo'];
 
 $sql=mysqli_query($con,"INSERT into student(name,phoneNo) VALUES('$name','$Phn')");
 



?>