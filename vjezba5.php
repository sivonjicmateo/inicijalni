
<a style="color: red;">A1</a><br>
<?php
var_dump(7 / 2);
echo "<br>";

var_dump(8 / 2);
echo "<br>";

var_dump("5" + 3);
echo "<br>";

var_dump("5" . 3);
echo "<br>";

var_dump(17 % 5);
echo "<br><br><br>";

?>
<a style="color: red;">A2</a><br>
<?php

// Ukupan broj minuta iz zadatka
$ukupno_minuta = 135;

// Izračun sati pomoću cjelobrojnog dijeljenja (135 podijeljeno sa 60 je 2)
$sati = intdiv($ukupno_minuta, 60);

// Izračun preostalih minuta pomoću modulo operatora (ostatak je 15)
$minuta = $ukupno_minuta % 60;

// Ispis rezultata u traženom obliku: 2 h 15 min
echo $sati . " h " . $minuta . " min";

?>
<br><br><br>
<a style="color: red;">B1</a><br>
<?php

$nazivTvrtke = "Kožara d.o.o.";

// Ispis duljine pomoću strlen i mb_strlen
echo "strlen: " . strlen($nazivTvrtke) . "<br>";
echo "mb_strlen: " . mb_strlen($nazivTvrtke) . "<br>";

// Ispis velikim slovima pomoću strtoupper i mb_strtoupper
echo "strtoupper: " . strtoupper($nazivTvrtke) . "<br>";
echo "mb_strtoupper: " . mb_strtoupper($nazivTvrtke) . "<br>";

?>
<br><br><br>
<a style="color: red;">B2</a><br>
<?php

// 1. Engleski zapis broja (koristi zarez za tisućice, točku za decimale)
echo number_format(1234.5, 2); 
echo "<br>";

// 2. Hrvatski zapis broja (koristi točku za tisućice, zarez za decimale)
echo number_format(1234.5, 2, ",", "."); 
echo "<br>";

// 3. Zaokruživanje broja na najbliži cijeli broj
echo round(318.75); 
echo "<br>";

// 4. Ispis današnjeg datuma u hrvatskom obliku (npr. 27. 10. 2026.)
echo date("j. n. Y."); 

?>
<br><br><br>
<a style="color: red;">C1</a><br>
<?php
const PDV = 0.25;

$n1 = "Procjena rizika"; $c1 = 450; $p1 = $c1 * PDV; $u1 = $c1 + $p1;
$n2 = "Sigurnosna analiza"; $c2 = 1280; $p2 = $c2 * PDV; $u2 = $c2 + $p2;
$n3 = "Edukacija zaposlenika"; $c3 = 300; $p3 = $c3 * PDV; $u3 = $c3 + $p3;

// Ispis podataka kao običan tekst
echo "$n1 - Bez PDV-a: " . number_format($c1,2,',','.') . " € | PDV: " . number_format($p1,2,',','.') . " € | Ukupno: " . number_format($u1,2,',','.') . " €<br>";
echo "$n2 - Bez PDV-a: " . number_format($c2,2,',','.') . " € | PDV: " . number_format($p2,2,',','.') . " € | Ukupno: " . number_format($u2,2,',','.') . " €<br>";
echo "$n3 - Bez PDV-a: " . number_format($c3,2,',','.') . " € | PDV: " . number_format($p3,2,',','.') . " € | Ukupno: " . number_format($u3,2,',','.') . " €<br>";

// Ispis datuma
echo "<br>Cijene ažurirane: " . date("j. n. Y.");
?>
<br><br><br>
<a style="color: red;">D razina 1</a><br>
<?php
// TSD-4RT | inicijali | 27.10.2026.

// 1. Izračun godina na tržištu (2026 - 2019 = 7 godina)
$godinaOsnutka = 2019;
$x = date("Y") - $godinaOsnutka;
echo "Na tržištu od 2019. — već " . $x . " godina<br><br>";

// 2. Čišćenje e-pošte i ispis mailto: poveznice
$email = " Info@SigurnaMreza.HR ";
$cisti_email = strtolower(trim($email));

echo "<a href='mailto:" . $cisti_email . "'>" . $cisti_email . "</a>";
?>



