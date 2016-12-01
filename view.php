<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("informatika",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "Daftar Pengunjung";
echo "<br>";
echo "Jumlah pengunjung : $jumlah";
$a=1;
while($baris=mysql_fetch_array($hasil))
{
echo "<br>"; echo $a; echo "<br>";
echo "Nama : "; echo $baris[0]; echo "<br>";
echo "Email : "; echo $baris[1]; echo "<br>";
echo "Komentar : "; echo $baris[2];
$a++;
}
?>