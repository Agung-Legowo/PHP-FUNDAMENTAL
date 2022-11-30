<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe Data Dalam PHP</title>
</head>
<body>
CONTOH KONVERSI TIPE DATA DALAM PHP : <BR>
<?php
print("Angka Yang digunakan : 123456.70 <BR>\n");
$Angka="123456.70";
//penggunaan tipe data integer
print("Tipe data string : $Angka<BR>\n");
//penggunaan tipe data string
settype($Angka, "Integer");
print("Tipe data Integer : $Angka<BR>\n");

//penggunaan tipe data double
settype($Angka, "Double");
print("Tipe data double : $Angka<BR>\n");
?>
    
</body>
</html>