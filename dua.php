<?php
$npm1=14706124;
$npm2=14706125;
$npm3=14706126;
$npm4=14706127;
$npm5=14706128;
echo "Hasil Dari Tipe Data Integer"; echo "<br />";
echo $npm1; echo "<br />";
echo $npm2; echo "<br />";
echo $npm3; echo "<br />";
echo $npm4; echo "<br />";
echo $npm5; echo "<br />";
echo "<br />";

	$a=10.66;
	$b=12.4;
	$c= $a + $b;
	echo "Hasil Dari Tipe Data Float"; echo "<br />";
	echo $c; echo "<br />";
	echo "<br />";

$Pesan1="Hallo nama saya Tia Fitriyah";
$Pesan2="Hobbi saya menyanyi meskipun suaranya fals hehehe";
echo "Hasil Dari Tipe Data String"; echo "<br />";
echo $Pesan1; echo "<br \>";
echo $Pesan2; echo "<br \>";
echo "<br />";
	
	$benar=true;
	$salah=false;
	echo "Hasil Dari Tipe Data Boolean"; echo "<br />";
	echo "benar = $benar, salah = $salah"; echo "<br />";
	echo "<br />";

$nama = array(
	1=>"Tia",
	2=>"Tio",
	3=>"Ita",
	4=>"Ito",
	5=>"Detia");
	echo "Hasil Dari Tipe Data Array"; echo "<br />";
	echo $nama[1];
	echo "<br />";
	echo $nama[2];
	echo "<br />";
	echo $nama[3];
	echo "<br />";
	echo $nama[4];
	echo "<br />";
	echo $nama[5];
	
	$coba = array (
        2=>"Andri",
        "dua"=>"2",
        'tiga'=>3,
        true=>true,
        9=>"sembilan",);
 
// pengaksesan array
echo $coba[2]; //Andri
echo "<br />";
echo $coba["dua"]; //2
echo "<br />";
echo $coba['tiga']; //3
echo "<br />";
echo $coba[true]; //1 (true di konversi menjadi 1)
echo "<br />";
echo $coba[9]; // sembilan
?>