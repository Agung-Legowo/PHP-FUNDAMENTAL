<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Perulangan</title>
</head>
<body>
<h2>Penggunaan FOR membuat tabel dengan PHP:</h2>
<BR></BR>
<center><table border=1>
<?php
for($baris=1;$baris<=12;$baris++)
{
?>
<tr>
<?php
for($kolom=1;$baris<=10;$kolom++)
{
?>
<td>
<?php
echo "Baris $baris, kolom $kolom";
?>
</td>
<?php
}
?>
</tr>
<?php
}
?>
</table></center>    
</body>
</html>