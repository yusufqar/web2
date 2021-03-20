<?php
$angka1 = 12;
$angka2 = 15;

echo "Muhammad Yusuf Qardhawi<br>181011400139<br>";
echo "Tabel Perkalian";
echo "<br>===============";
echo "<table>";
while ( $angka2 <= 45 ) {
 echo "<tr><td>";
 echo $angka1 , " * " , $angka2 , " = ";
 echo "</td><td>";
 echo $angka1 * $angka2;
 echo "</td></tr>";
 $angka2 = $angka2 + 2;
}
echo "</table>";
?>