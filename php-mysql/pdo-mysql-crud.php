<?php

class TableRows extends RecursiveArrayIterator
   {
        function __construct ( $it) 
        {
            parent::__construct($it, self::LEAVES_ONLY);        
        }
        function current () 
        {
            return "<td>".parent::current()."</td>";
        }
        function beginChildren () 
        {
            echo "<tr>";
        }
        function endChildren () 
        {
            echo "</tr>"."\n";
        }
    }



$servername="localhost";
$username="root";
$password="";

try {
    $conn= new PDO("mysql:host="$servername";dbname=$dbname",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();

    $sql="CREATE DATABSE mydb"
    $conn->exec($sql);
    echo "successfully created databse";

    $sql="CREATE table student(name VARCHAR(25) ,id INT(3) );";
    $conn->exec($sql);
    echo "successfully created table";

    $insert_data= $conn->preapare("INSERT INTO student(name,id) VALUES(:name,:id);");

    $insert_data->bindParam(':name',$name);
    $insert_data->bindParam(':id',$id);

    $name = "mehraz";
    $id = "240";
    $insert_data->exec();
    
    $name = "anan";
    $id = "057";
    $insert_data->exec();


    $show = $conn->prepare("SELECT * FROM student;");
    $show->exec();

    $result = $show->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($show->fetchAll())) as $key => $value) 
    {
        echo $value;
    }
} 
catch (PDOException $e) {
    echo $sql."ERROR : ".$e->getMessage(); 
}


?>
