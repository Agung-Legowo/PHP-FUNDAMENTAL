<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kondisi</title>
</head>
<body>
    CONTOH PENGGUNAAN IF dalam PHP:<BR>
<p>
<?php
$User="BurgerDaging";
$pass="adadeh";
    if($User == "BurgerDaging" && $pass == "adadeh") {
        echo "login berhasil";
    } else {
        echo "login gagal";
    }

?>    
</body>
</html>