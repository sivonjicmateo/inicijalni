<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>CyberShield Croatia - Usluge</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
<?php
// 1. Definiranje konstante za PDV (25%)
const PDV = 0.25;

// Definiranje naziva i cijena usluga bez PDV-a
$usluga1_naziv = "Procjena rizika";
$usluga1_cijena = 450;

$usluga2_naziv = "Sigurnosna analiza";
$usluga2_cijena = 1280;

$usluga3_naziv = "Edukacija zaposlenika";
$usluga3_cijena = 300;

// 2. Izračun iznosa PDV-a i ukupne cijene za svaku uslugu
$usluga1_pdv = $usluga1_cijena * PDV;
$usluga1_ukupno = $usluga1_cijena + $usluga1_pdv;

$usluga2_pdv = $usluga2_cijena * PDV;
$usluga2_ukupno = $usluga2_cijena + $usluga2_pdv;

$usluga3_pdv = $usluga3_cijena * PDV;
$usluga3_ukupno = $usluga3_cijena + $usluga3_pdv;
?>

<!-- 3. Ispis tablice s iznosima u hrvatskom zapisu -->
<table border="1" cellpadding="5" style="border-collapse: collapse; text-align: left;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Usluga</th>
            <th>Bez PDV-a</th>
            <th>PDV</th>
            <th>Ukupno</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $usluga1_naziv; ?></td>
            <td><?php echo number_format($usluga1_cijena, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga1_pdv, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga1_ukupno, 2, ',', '.') . " €"; ?></td>
        </tr>
        <tr>
            <td><?php echo $usluga2_naziv; ?></td>
            <td><?php echo number_format($usluga2_cijena, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga2_pdv, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga2_ukupno, 2, ',', '.') . " €"; ?></td>
        </tr>
        <tr>
            <td><?php echo $usluga3_naziv; ?></td>
            <td><?php echo number_format($usluga3_cijena, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga3_pdv, 2, ',', '.') . " €"; ?></td>
            <td><?php echo number_format($usluga3_ukupno, 2, ',', '.') . " €"; ?></td>
        </tr>
    </tbody>
</table>

<br>

<!-- 4. Ispis datuma ažuriranja -->
<p>Cijene ažurirane: <?php echo date("j. n. Y."); ?></p>


    <div class="kontejner">
        <div class="kartica">
            <h2>Naše Usluge i Cjenik</h2>
            <p>Želimo biti u potpunosti transparentni s našim klijentima. Ovdje možete pronaći pregled naših osnovnih paketa.</p>

            <table>
                <thead>
                    <tr>
                        <th>Naziv Usluge</th>
                        <th>Detaljni Opis</th>
                        <th>Cijena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Osnovna Edukacija</strong></td>
                        <td>Predavanje u trajanju od 2 sata o prepoznavanju phishing e-mailova i korištenju lozinki.</td>
                        <td>150 €</td>
                    </tr>
                    <tr>
                        <td><strong>Sigurnosna Procjena</strong></td>
                        <td>Pregled računala i mreže u vašoj tvrtki uz izradu detaljnog izvještaja na razumljivom jeziku.</td>
                        <td>300 €</td>
                    </tr>
                    <tr>
                        <td><strong>Mjesečna Podrška</strong></td>
                        <td>Kontinuirani nadzor sustava, izrada sigurnosnih kopija i podrška u slučaju problema.</td>
                        <td>100 € / mj.</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="kontakt.html" class="gumb">Zatražite ponudu</a>
        </div>
    </div>

    <footer>
        <div class="footer-sadrzaj">
            <div class="footer-kolona">
                <h4>CyberShield Croatia</h4>
                <p>Adresa: Radnička cesta 42, Zagreb<br>Telefon: 01 2345 678<br>Email: info@cybershield.hr</p>
                <div class="drustvene-mreze">
                    <a href="https://facebook.com" target="_blank">Facebook</a>
                    <a href="https://instagram.com" target="_blank">Instagram</a>
                    <a href="https://linkedin.com" target="_blank">LinkedIn</a>
                </div>
            </div>
            <div class="footer-kolona">
                <h4>Newsletter</h4>
                <p>Prijavite se za primanje sigurnosnih savjeta.</p>
                <form onsubmit="alert('Hvala na prijavi!'); return false;">
                    <input type="email" placeholder="Vaš e-mail..." required>
                    <button type="submit" class="gumb" style="margin-top: 8px;">Prijava</button>
                </form>
                <p class="privatnost-tekst">Vaš e-mail koristimo isključivo za slanje edukativnog sadržaja i ne dijelimo ga s drugima.</p>
            </div>
        </div>
        <div class="kopirajt">© 2026 CyberShield Croatia. Sva prava pridržana.</div>
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

    </footer>

</body>
</html>