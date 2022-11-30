<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Perulangan</title>
</head>
<body>
Contoh penggunaan FOREACH dalam PHP:<BR>
<?php
//struktur looping foreach
$example[0]= "Muhammad Agung Ramadhan";
$example[1]= "Budidarma Programming Club";
$example["Negara"]= "Indonesia";
$example["KOTA"]= "Medan";
$example["no"]=061;
foreach($example as $kategori)
    print($kategori."<BR>\n");

?>    
</body>
</html>