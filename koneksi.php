<html>
<head>
<title>Koneksi Database Mysql Tia Fitriyah - 147006124</title>
</head>
<body>
<h1>Demo Koneksi Database Tia Fitriyah - 147006124 </h1>
<?php
$conn = mysql_connect("localhost","root","");
if ($conn) {
	echo "OK";
} else {
	echo "Server not connected";
}
?>
</body>
</html>