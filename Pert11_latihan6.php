<?php
 $koneksi=mysqli_connect("localhost","root","","lat_dbase");
 //mysqli_select_db("lat_dbase");
 $hasil=mysqli_query($koneksi,"select * from tbl_mhs");
 While($data=mysqli_fetch_array($hasil))
 {
 echo "$data[FirstName] $data[LastName] $data[Age]<br>";
 }
?> 