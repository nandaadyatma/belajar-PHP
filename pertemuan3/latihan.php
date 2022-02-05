<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pengulangan</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php 
	for ($i=1; $i <6 ; $i++) { 

	echo "<tr>";
	// echo "<td>$i,1</td>";
	// echo "<td>$i,2</td>";
	// echo "<td>$i,3</td>";
	for ($j=1; $j <6 ; $j++){
	echo "<td>$i,$j</td>";
	}

	echo"</tr>" ;

	 } ?>

	
</table >

<br>
<br>

<table border="2" cellpadding="10" cellspacing="1">
<?php for ($i=1; $i < 5 ; $i++) {  ?>
	<tr>
		<?php for ($j=1; $j < 5 ; $j++) {  ?>
			<td><?php echo "$i, $j"; ?></td>
		<?php } ?>
	</tr>
<?php } ?>
</table>
</body>
</html>