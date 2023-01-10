<?php
$servername = "localhost";
$dbname ="mydb";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die ("Connection  failed : ".mysqli_connect_error());
}

$sql = " INSERT INTO MyGuests
( firstname , lastname , email )
VALUES ( 'John','Doe','john@example.com');";

$sql .= " INSERT INTO MyGuests
( firstname , lastname , email )
VALUES ( 'habib','khan','hbb@example.com');";

if(mysqli_multi_query($conn,$sql))
{
    echo "Successful";
}
else
{
    echo "Failed to create new records".sql.mysqli_error($conn);
}
?>