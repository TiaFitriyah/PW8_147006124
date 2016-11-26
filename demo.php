<html>
<head>
<title>Laporan Resmi</title>
</head>
<body>
<h1>Demo Operator</h1>
<h3>Arithmetic</h3>
<table border="1" cellpadding="4">
<tr style="background:#ccc">
<th>Operator Kiri</th>
<th>Operand</th>
<th>Operator Kanan</th>
<th>Proses</th>
</tr>
<?php
if (!$_POST['act']){
echo'
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<td><input type="text" name="kiri" size="10"></td>
<td><select name="act" maxlength="15">
	<option value=tambah>+
	<option value=kurang>-
	<option value=kali>*
		<option value=bagi>/
		<option value=mod>%	
	</select></td>
<td><input type="text" name="kanan" size="10"></td>
<td><input type="submit" value="Hitung" name="doit"></td>
</form>
';
}else{
if($_POST['act']=='tambah'){
$calc = ($_POST['kiri']+$_POST['kanan']);
$op='+';
}
if($_POST['act']=='kurang'){
$calc = ($_POST['kiri']-$_POST['kanan']);
$op='-';
}
if($_POST['act']=='kali'){
$calc = ($_POST['kiri']*$_POST['kanan']);
$op='*';
}
if($_POST['act']=='bagi'){
$calc = ($_POST['kiri']/$_POST['kanan']);
$op='/';
}
if($_POST['act']=='mod'){
$calc = (($_POST['kiri']*$_POST['kanan'])/100);
$op='% of';
}
echo "Tampilan Hasil Demo Operator : <br>";
echo $_POST['kiri'].' '.$op.' '.$_POST['kanan'].' = '.$calc;
}
?>
</table>
</body>
</html>