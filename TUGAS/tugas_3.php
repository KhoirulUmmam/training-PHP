<?php 
	$nama = "Khoirul Ummam";
	$nim = 1197050059;
	$tanggal_lahir = "Kuningan, 18 Juni 2001";
	$alamat = "Desa Sukamukti, Kec. Jalaksana, Kab. Kuningan, Jawa Barat";
	$status = "Mahasiswa";
	$instansi = "UIN Sunan Gunung Djati Bandung";
	$email = "k.ummam16@gmail.com";
	$medsos = "https://www.instagram.com/ummam.khoirul/";
	$github = "https://github.com/khoirul-ummam";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- MY CSS -->
	<style>
			hr {
				border: none;
				width: 31%;
				height: 5px;
				margin-left: 0;
				background: #000000;
				border-radius: 10px;
				margin-top: -15px;
			}

			table {
				font-size: 11px;
				margin-top: 10px;
			}

			img {
				width: 100px;
				margin-top: -10px;
			}



		@media (min-width: 992px) {

			hr {
				width: 8%;
			}

			table {
				font-size: 25px;
			} 

			img {
				width: 125px;
			}

		}
	</style>


	<title>Biodata | Khoirul Ummam</title>
</head>
<body>
	<b>
		<h2>BIODATA</h2><hr>
	</b>
	<br>
		<img src="ummam.jpeg">
	<br>

	<table>
		<tr>
			<td>Nama</td>
			<td>: <?php echo "$nama"; ?></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>: <?php echo "$nim"; ?></td>
		</tr>
		<tr>
			<td>TTL</td>
			<td>: <?php echo "$tanggal_lahir"; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <?php echo "$alamat"; ?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>: <?php echo "$status"; ?></td>
		</tr>
		<tr>
			<td>Instansi</td>
			<td>: <?php echo "$instansi"; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <?php echo "$email"; ?></td>
		</tr>
		<tr>
			<td>Instagram</td>
			<td>: <a href="<?php echo "$medsos"; ?>" target="_blank">@ummam.khoirul</a></td>
		</tr>
		<tr>
			<td>GitHub</td>
			<td>: <a href="<?php echo "$github"; ?>" target="_blank">My GitHub</a></td>
		</tr>
	</table>
</body>
</html>