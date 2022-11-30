<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Break</title>
</head>
<body>
Contoh penggunaan BREAK dalam PHP:<BR>
<p>
<?php
for($x=0;$x<=20; $x++){
	print("$x:");
	for($y=0;$y<=9;$y++){
	if($x==5)
	break 2;
	print($y);
}
	print("<br>\n");
}
?>  
</p>
</body>
</html>