<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// komentar

/*
komentar
lebih dari 
satu baris
*/

// Standar Output
// echo, print
// print_r
// var_dump

echo "Nanda Arya";
var_dump("expression");
echo true;

// variabel

$nama = "Adyatma";

$umur = 19;
$namaDepan = "nanda";
$namaBelakang = "arya";


//operator aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y . " buah";

// . untuk menggabungkan string


echo $namaDepan . " " . $namaBelakang;
// <!-- operator perbandingan -->
// <!-- <, >, <=, >=, ==, != -->

var_dump(1 == "1"); 
// 1 = "1" ini dianggap benar karena tidak melihat tipe data (identitas)

// identitas 
// ===, !===

var_dump(1 === 1);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar PHP</title>
</head>
<body>
<p>Ini paragraf 1</p>
<p>Ini paragraf 2</p>
<h1>Tes <?php echo "halo nama saya $nama umur $umur tahun";
?> </h1>
<?php echo "ini pake echo";
?>
</body>
</html>