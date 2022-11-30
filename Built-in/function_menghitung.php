<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi hitung</title>
</head>
<body>
Contoh penggunaan fungsi untuk proses perhitungan dalam PHP:<BR>
<?php
function hasil($a, $b)
{
	$hitung = $a +$b;
	return $hitung;
}	
	$c = hasil(20,8);
	echo($c);
	echo("<BR>\n");
	echo(hasil(300,200));

?>  
</body>
</html>