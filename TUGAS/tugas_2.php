<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>modifikasi tanggal dan waktu</title>
</head>
<body>
	<?php

		echo date("m-F-Y, g:i:s a"), "<br><br>";

		#percobaan format lainnya
		echo "PERCOBAAN FORMAT LAINNYA :", "<br><br>";

		# Waktu
		echo "Menampilkan waktu :";
		echo "<br>";
		echo "Pukul : ";
		echo date("h:i:s A");
		echo "<br>";
		echo "Pukul : " . date("g:i:s");
		echo "<br>";
		echo date("l, H:i:s a");
		echo "<br><br>";

		#Tanggal, bulan, tahun
		echo "Menampilkan tanggal :";
		echo "<br>";
		echo "Tanggal : " . date("d, m y");
		echo "<br>";
		echo "Tanggal : " . date("d D, M y");
		echo "<br>";
		echo "Tanggal : " . date("d l, F Y");
		echo "<br><br>";

		#tanggal dan waktu
		echo "Tanggal dan Waktu:";
		echo "<br>";
		echo date("d m y, g:i:s");
		echo "<br>";
		echo date("d D, F y, h:i:s a");
		echo "<br>";
		echo date("d l, F Y, H:i:s A");
		echo "<br><br>";
	  ?>
</body>
</html>