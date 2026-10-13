
<?php
// TSD-4RT | MS | 13.10.2026. 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include "zaglavlje.php"; 
$trenutnaStranica = "usluge";?>

<?php

// jednoredni komentar
echo "Dobro došli na stranicu.";
?>

<h1>Novosti</h1>
<?php echo "<p>Zadnja izmjena: 29. 9. 2026.</p>"; ?>

<?php
$nazivTvrtke = "SigurnaMreža d.o.o."; // tekst (string)
$godinaOsnutka = 2019;               // cijeli broj (int)
$cijenaPaketa = 149.90;              // decimalni broj (float)
$radiDanas = true;                   // istina/laž (bool)

echo $nazivTvrtke;
echo "<p>Osnovani $godinaOsnutka.</p>";           // varijabla unutar dvostrukih navodnika
echo "<p>Paket: " . $cijenaPaketa . " eura.</p>"; // spajanje točkom
?>




<main>
    <h1>Usluge</h1>
</main>



<?php

$godina = 2026;
?>

<p>&copy; <?php echo $godina; ?> Sva prava pridržana.</p>

<?php

$paket_osnovni = "Osnovni paket - 50 EUR";
$paket_standard = "Standardni paket - 100 EUR";
$paket_premium = "Premium paket - 150 EUR";
?>


<table>
    <tr>
        <td><?php echo $paket_osnovni; ?></td>
    </tr>
    <tr>
        <td><?php echo $paket_standard; ?></td>
    </tr>
    <tr>
        <td><?php echo $paket_premium; ?></td>
    </tr>
</table>
<?php include "podnozje.php"; ?>
</body>
</html>