<?php
$servername = "localhost";
$dbname ="mydb";
$username="root";
$password="";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    $conn->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->beginTransaction();
    
    $conn->exec(" INSERT INTO MyGuests( firstname , lastname , email )
    VALUES ( 'John','Doe','john@example.com');");

    $conn->exec(" INSERT INTO MyGuests( firstname , lastname , email )
    VALUES ( 'habib','khan','hbb@example.com');");

    $conn->commit();
    echo "succeful";
}
catch(PDOexception $e)
{
    $conn->rollback();
    echo "Error: ".$e->getMessage(); 
}
$conn=null;
?>
