<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Break</title>
</head>
<body>
Contoh penggunaan Break dalam PHP:<BR>
<p>
<?php
 for($n =0;$n<=30;$n+=3)
 {
 	if($n==15)
 	break;
 	print("$n<BR>\n");
 }

?>  
</p>
</body>
</html>