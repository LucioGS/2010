<html>
<head>
</head>
<body>
<?php
	$numero1 = $_POST["num1"];
	$numero2 = $_POST["num2"];
	while ($numero1 <= $numero2) {
		echo $numero1;
		echo "</br>";
		$numero1  = $numero1  + 1;
	}
?>
</body>
</html>

