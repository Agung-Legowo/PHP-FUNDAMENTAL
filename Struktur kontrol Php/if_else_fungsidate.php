<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kondisi</title>
</head>
<body>
Contoh penggunaan IF dalam PHP:<BR>
<?php
$hari = date("W");
if ($hari == 0)
    echo("Hari ini hari senin");
else
    echo("Hari ini adalah hari senin");

?>    
</body>
</html>