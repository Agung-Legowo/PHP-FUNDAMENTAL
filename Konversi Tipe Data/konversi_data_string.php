<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTOH KONVERSI DATA PHP</title>
</head>
<body>
CONTOH KONVERSI DATA DALAM PHP : <BR><BR>
<?php
$berat = "50.5 kg";
print("Tipe STRING : $berat<BR>\n");
printf("Tipe Double : %S<BR>\n", (double) $berat);
printf("Tipe Integer : %S<BR>\n", (int)($berat));
printf("Tipe String : %S<BR>\n", $berat);
$bilangan = 28;
$berat = (string) $bilangan; //konversi ke string
printf("Bil.ke String: %S<BR>\n", $berat);
?>
</body>
</html>