<?php
	$db = mysqli_connect("182.50.133.80:3306", "money", "sosmoney123456", "money") or die("Could not connect: " . mysql_error());
	mysqli_query($db, "SET CHARACTER SET UTF8");
?>