<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
CONTOH PENGGUNAAN ARRAY DALAM PHP : <BR>
<?php
$array[]=1;
$array[]='13';
$array[]="11";
$array[]='J';
$array[]='string';
$nama["depan"]="Guru";
$nama["alamat"]="medan";
$nama["email"]="agungrtx@gmail.com";
for($a=0; $a<5; $a++)
{
    echo("variable \$array[$a] keterangannya adalah : $array[$a]<br>");
}
    echo("variable \$nama[depan] nilainya adalah : $nama[depan]<br>");
    echo("variable \$nama[alamat] nilainya adalah : $nama[alamat]<br>");
    echo("variable \$nama[email] nilainya adalah : $nama[email]<br>");
?>
</body>
</html>