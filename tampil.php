<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Buku Tamu</title>
</head>
<body>
	<center>
		<h1>Data Buku Tamu</h1>
		<a href="index.php">Home</a><br>
		<hr>
		<?php
		$con = mysqli_connect("localhost","root","", "tamu");
		$data=mysqli_query($con,"select * from datatamu");
		While($array=mysqli_fetch_array($data))
		 {
		 echo "$array[id_tamu] $array[nama] $array[email] $array[alamat] $array[hp] $array[ks]<br>";
		 }

		$con->close();
		?>	
	</center>
</body>
</html>