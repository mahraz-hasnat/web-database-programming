<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$d=date("D");
		switch ($d){
		case "Mon":
			echo "Today is Monday";
			break;
		case "Tue":
			echo "Today is Tuesday";
			break;
		case "Thu":
			echo "Today is Thursday";
			break;
		case "Fri":
			echo "Today is Friday";
			break;
		case "Sat":
			echo "Today is Saturday";
			break;
		case "Sun":
			echo "Today is Sunday";
			break;
		case "Wed":
			echo "Today is Wednesday. Have a nice day brother";
			break;
		default:
			echo "Wonder which day is this?";

	}
	?>

</body>
</html>