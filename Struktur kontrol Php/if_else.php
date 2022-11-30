<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kondisi</title>
</head>
<body>
    Contoh Penggunaan IF ELSE dalam PHP:<BR>
<?php
$a=20;
$b=18;
$c=30;
printf("\$a=%d<BR>",$a);
printf("\$b=%d<BR>",$b);
printf("\$c=%d<BR><BR>",$c);
if($c>$a)
{
    echo("Nilai\$c lebih besar dari\$a<BR>");
}
if($a==$b)
{
    echo("Nilai \$a sama dengan \$b");
}
else
{
    echo("Nilai \$a tidak sama dengan \$b");
}
?>    
</body>
</html>