<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 12 - Latihan 1 (Pemograman Web 2)</title>
</head>
<body>
	
<?php
$con = mysqli_connect("localhost","root","Pertemuan12_lt1");
if (!$con) {
	die('Could not connect: ' . mysqli_error());
} 
else {
	echo "berhasil";
}

mysql_query($con,"UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysql_close($con);
?>
</body>
</html>