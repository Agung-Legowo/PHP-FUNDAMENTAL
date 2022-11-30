<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan FOR</title>
</head>
<body>
Contoh penggunaan FOR dalam PHP:<BR>
pilih angka 12 sampai 28:
<p>
<?php
echo "<select name='pilih'>\n";
for($n=12; $n<=28; $n++)
{
    echo("\<option value=$n>$n</option>\n");
}
echo"</select\n";
?>    
</p>
</body>
</html>