<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$unit = 50;
		echo "total unit " .$unit." . <br>" ;
		//echo "Total bill : ";

		$bill = 0;
		//echo $unit;
		if ($unit > 0 && $unit < 300 ) {
			$bill = ($unit * 5);
			echo "Total bill " .$bill. " Taka";
		} elseif ($unit >300 && $unit < 400 ) {
			$bill = ($unit * 7);
			echo "Total bill " .$bill. " Taka";	
		} elseif ($unit >400 && $unit < 500 ){
			$bill = ($unit * 10);
			echo "Total bill  " .$bill. " Taka";
		} else{
			$bill = ($unit * 15);
			echo "Total bill " .$bill. "Taka";
		}
		
	?>

</body>
</html>