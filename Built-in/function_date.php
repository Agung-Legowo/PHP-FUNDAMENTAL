<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function Date</title>
</head>
<body>
Contoh penggunaan function date dalam PHP:<BR>
<p>
<?php
$tgl =date("d/m/Y");
echo"Hari ini adalah tanggal $tgl<br>";
$waktu = date("h:i:s A");//A menunjukan AM atau PM
echo "waktu menunjukan pukul : $waktu";

?>  
</p>
</body>
</html>