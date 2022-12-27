<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

foreach($age as $x => $value) {
    echo "Key=" . $x . ", Value=" . $value. " ";
	echo "<br>";
	echo var_dump($value);  // "Peter"=>35, "Ben"=>37, "Joe"=>43  var_dump($value) return int(value)
	echo "<br>";
	echo var_dump($age);  // array(3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) } 
    echo "<br>";              
}
?>