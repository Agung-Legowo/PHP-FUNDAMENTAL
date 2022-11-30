<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator logika dalam PHP</title>
</head>
<body>
Contoh Operator Logika Dalam PHP:<BR><BR>
<?php
$x=30;
$y=10;
echo "$x == $y :",($x == $y);
echo "<br>$x ! = $y : ", ($x ! = $y);
echo "<br>$x >  $y : ", ($x >  $y);
echo "<br>$x <  $y : ", ($x <  $y);
echo "<br>($x == $y)&& ($x > $y) : ",(($x !=$y)&& ($x > $y));
echo "<br>($x == $y)|| ($x > $y) : ",(($x !=$y)|| ($x > $y));

?>
</body>
</html>