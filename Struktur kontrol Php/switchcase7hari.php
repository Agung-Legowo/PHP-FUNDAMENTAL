<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kondisi</title>
</head>
<body>
Contoh Penggunaan SWITCH CASE dalam PHP:<BR>
<p>
<?php
$hari = date("W");
switch($hari)
{
    case 0:
        echo("Minggu");
        break;
    case 1:
        echo("Senin");
        break;
    case 2:
        echo("Selasa");
        break;
    case 3:
        echo("Rabu");
        break;
    case 4:
        echo("Kamis");
        break;
    case 5:
        echo("Jumat");
        break;
    default:
        echo("Sabtu");    
    
}

?>    
</body>
</html>