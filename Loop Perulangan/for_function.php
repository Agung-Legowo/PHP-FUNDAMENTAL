<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Perulangan</title>
</head>
<body>
Contoh penggunaan FOR dalam PHP:<BR>
<?php
function php($teks, $jumlah = 1) {
    for ($i = 1; $i <= $jumlah; $i++)
    echo($teks);
}
php("..PHP..",7);
echo("<BR>\n");
php("+++"); //sama dengan php("+++",1);
echo("<BR>\n");
php("+++",1);

?>    
</body>
</html>