<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan CONTINUE</title>
</head>
<body>
Contoh penggunaan continue dalam PHP:<BR>
<p>
<?php
 for($n=2;$n<16;$n++)
 {
 			if($n==4)
 			continue;
 		if($n==9)
 			break;
 		echo "$n";
 }
?>  
</p>
</body>
</html>