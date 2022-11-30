<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur kondisi</title>
</head>
<body>
Contoh Penggunaan SWITCH CASE dalam PHP : <BR>
<p>
<?php
$hari = date("1");
switch($hari)
{
case "monday";
    $harinya = "senin";
    break;
case "Tuesday";
    $harinya = "selasa";
    break;
case "Wednesday";
    $harinya = "Rabu";
    break;
case "Thursday";
    $harinya = "Kamis";
    break;
case "Friday";
    $harinya = "Jumat";
    break;
case "Sartuday";
    $harinya = "Sabtu";
    break;
default:
    $harinya = "Minggu";
    break;
}
print("Hari ini adalah hari $harinya");

 ?>   
</body>
</html>