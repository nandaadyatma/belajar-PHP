<?php 
// Date/Time
echo date("d");
// d date tanggal
// l hari 
// M bulan
// Y Tahun

echo "<br><br><br>";
echo date("l, d-M-Y");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h3>
	<?php 
	 echo date("l, d-M-Y");
	 ?>
</h3>
</body>
</html>

<?php 
// echo time();

echo date("l d M Y",time()+(60*60*24*100));

echo "<br><br>";
// mktime()
// format mktime(0,0,0,0,0,0) -> (s,m,h,m,d,y)
echo "<br><br>";
// mendapatkan hari tanggal pada tanggal yang diinginkan
echo date("l d M Y",mktime(0,0,0,12,27,2002));

// strotime 
echo "<br><br>";
echo date("l",strtotime("25 dec 2002")) ;

?>