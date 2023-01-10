<?php
$servername = "localhost";
$dbname ="mydb";
$username="root";
$password="";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die ("Connection  failed : ".$conn->connect_error);
}

$sql = " INSERT INTO MyGuests
( firstname , lastname , email )
VALUES ( 'John','Doe','john@example.com');";

$sql .= " INSERT INTO MyGuests
( firstname , lastname , email )
VALUES ( 'habib','khan','hbb@example.com');";

if($conn->multi_query($sql)===true)
{
    echo "Successful";
}
else
{
    echo "Failed to create new records".$sql.$conn->error;
}
?>
