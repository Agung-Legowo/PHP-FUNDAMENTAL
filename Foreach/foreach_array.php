<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Perulangan FOREACH</title>
</head>
<body>
contoh pengguna FOREACH dalam PHP:<BR>
<?php
$huruf=array(a,b,c,d,e);
foreach($huruf as $nilai)
{
    print"Nilai yang ditampilkan \$huruf : $nilai.<br>\n";
}
?>
</body>
</html>