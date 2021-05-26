<!DOCTYPE html>
<html>
<head>
	<title>Simpan</title>
</head>
<body>
	<center>
	<a href="index.php">Home</a><br>
	<a href="tampil.php">Data Buku Tamu</a><br><hr>
	<?php
	$con = mysqli_connect("localhost","root","", "tamu");
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$hp=$_POST['hp'];
	$ks=$_POST['ks'];

	// sql entry data pada tabel
	$sql = "INSERT INTO datatamu (nama, email, alamat, hp, ks)
	VALUES ('$nama','$email','$alamat','$hp','$ks')";

	if (mysqli_query($con,$sql) === TRUE) {
	    echo "Data telah terkirim!";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
	?>								
	</center>
</body>
</html>