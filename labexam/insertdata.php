<?php
    include 'dbconnect.php';
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $url=$_POST['url'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phn=$_POST['phnNo'];
    $info=$_POST['info'];
 
    $sql=mysqli_query($con,"INSERT into user(fname,mname,lname,email,pass,url,dob,gender,phnNo,info) VALUES('$fname','$mname','$lname','$email','$pass','$url','$dob','$gender','$phn','$info')");
    
    header('Location: success.html');
    exit;

    
?>