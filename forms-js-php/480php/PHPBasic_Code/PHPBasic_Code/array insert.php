
<!DOCTYPE html>
<html>
<body>

<?php
$a=array("red","green");
array_push($a,"blue","yellow");   // Array ( [0] => red [1] => green [2] => blue [3] => yellow )
print_r($a);


// array_slice() Function

$a=array("red","green","blue","yellow","brown");     // Array ( [0] => blue [1] => yellow [2] => brown )
print_r(array_slice($a,2));
echo "<br><br><br>";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));                        // Array ( [0] => green [1] => blue )
echo "<br><br><br>";

$a=array("red","green","blue","yellow","brown");     // Array ( [0] => yellow )
print_r(array_slice($a,-2,1,true));
echo "<br><br><br>";

// Preserve parameter set true:
$a=array("red","green","blue","yellow","brown");   // Array ( [1] => green [2] => blue )
print_r(array_slice($a,1,2,true));
echo "<br><br><br>";

// Preserve parameter set false (default):          
$a=array("red","green","blue","yellow","brown");     // Array ( [0] => green [1] => blue )
print_r(array_slice($a,1,2,false));

?>

</body>
</html>


