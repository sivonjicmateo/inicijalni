<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>CyberShield Croatia - Usluge</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>

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
    </footer>

</body>
</html>