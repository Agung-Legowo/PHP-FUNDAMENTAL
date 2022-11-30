<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kondisi</title>
</head>
<body>
Contoh penggunaan IF ELSE dalam PHP:<BR>
<?php
$Nilai=6;
echo("Nilai Anda =$Nilai<BR>");
if($Nilai>9)
{
    echo "Anda Lulus<BR>";
}
else if ($Nilai>=7)
{
    echo "Anda Harus Mengulang<BR>";
}
else
{
    echo "Anda Tidak Akan Lulus<BR>";
}

?>   
</body>
</html>