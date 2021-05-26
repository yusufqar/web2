
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<center>
		<h1>Form Buku Tamu</h1>
		<form name="tamu" method="post" action="simpan.php">
		Nama  <input  style="margin: 5px 5px 5px 20px;" type="text" name="nama"><br>
		Email  <input style="margin: 5px 5px 5px 24px;" type="text" name="email"><br>
		Alamat  <input style="margin: 5px 5px 5px 14px;" type="text" name="alamat"><br>
		No HP  <input style="margin: 5px 5px 5px 26px;" type="text" name="hp"><br>
		Kritik & Saran <br><textarea style="width: 210px; margin-bottom: 10px;" name="ks"></textarea><br>
		<input type="submit" name="submit" value="Simpan"> 
		<input type="reset" name="reset" value="Reset">
		<br>
		<hr>
		<a href="tampil.php">Data Buku Tamu</a>
	</center>
</form>
</body>
</html>
