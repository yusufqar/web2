<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");
//mysql_select_db("lat_dbase");
$hasil=mysqli_query($koneksi,"select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit";
?>