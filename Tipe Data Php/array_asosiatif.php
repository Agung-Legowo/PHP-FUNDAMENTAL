<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY DALAM PHP</title>
</head>
<body>
CONTOH ARRAY ASOSIATIF DALAM PHP : <BR><BR>
<?php
$telepon["Agung"] = 179;
$telepon["Arif"] = 170;
$telepon["Milton"] = 175;
$telepon["Anita"] = 0;
echo "Nomor Telepon Agung-$". $telepon["Agung"]."<br>";
echo "Nomor Telepon Arif-$". $telepon["Arif"]."<br>";
echo "Nomor Telepon Milton-$". $telepon["Milton"]."<br>";
echo "Nomor Telepon Anita-$". $telepon["Anita"]."<br>";
?>

</body>
</html>