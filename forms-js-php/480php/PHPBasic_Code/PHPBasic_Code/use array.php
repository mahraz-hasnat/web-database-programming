
<!DOCTYPE html>
<html>
<body>

<?php
$cities[0] = "Phoenix";
$cities[1] = "Tucson";
$cities[2] = "Flagstaff";
$cities[3] = "Tempe";
$cities[4] = "Prescott";

unset($cities[3]);
var_dump($cities); 
echo "<br><br>";
echo "<br><br>";
$cities[3] = "Dhaka";

for($i=0;$i<5;$i++)
	echo $cities[$i]." ";

?>

</body>
</html>


