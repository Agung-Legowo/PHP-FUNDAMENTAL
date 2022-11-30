<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Perulangan</title>
</head>
<body>
Contoh Penggunaan FOR dalam PHP:<BR>
<?php
$bil = 40;
$cek = 6;
echo("Bilangan genap antara 40 hingga 80<BR>");
for ($cek=6;$cek<40;$cek++)
{
    $bil+=4;//niali $bil dinaikan (ditambah) 4
    echo("$bil<BR>");
}

?>    
</body>
</html>