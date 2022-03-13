<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pemrograman PHP dengan Array</title>
</head>
<body>
	<?php
		$nama[] = "Khoirul";
		$nama[] = "Ummam";
		$nama[] = "Shiro";
		echo $nama[1] . $nama[2] . $nama[0];
		echo "<br>";

		echo "Jumlah array adalah =", count($nama);
		

	  ?>
</body>
</html>