<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan Do While</title>
</head>
<body>
 contoh penggunaan DO WHILE dalam PHP:<BR>
 pilih angka 1 sampai 20   
<p>
<?php
$pil=20;
echo"<select name='pilih'>\n";
    $n=1;
    do
    {
        echo("\t<option value=$n>$n</option>\n");
    }   while($n++<$pil);
        echo "</select>\n";

?>
</p>
</body>
</html>