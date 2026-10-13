<?php
$naslovStranice = "Početna stranica"; 
include "zaglavlje.php"; 
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>CyberShield Croatia - Početna</title>
    <link rel="stylesheet" href="stil.css">
    
</head>
<body>

    

    <div class="kontejner">
        <div class="kartica">
            <h1>Edukacija o informacijskoj sigurnosti za sve</h1>
            <p>Pomažemo građanima i malim tvrtkama razumjeti digitalne opasnosti. Bez zbunjujućih tehničkih pojmova – učimo vas kako sigurno koristiti internet.</p>
            <a href="usluge.html" class="gumb">Pogledajte naše usluge</a>
        </div>

        <div class="mreza-3">
            <div class="kartica">
                <h3>📧 Phishing prevare</h3>
                <p>Prepoznajte lažne e-mailove koji pokušavaju ukrasti vaše lozinke ili podatke s kartica.</p>
                <a href="blog.html" class="gumb">Saznaj više</a>
            </div>
            <div class="kartica">
                <h3>🔑 Jake lozinke</h3>
                <p>Naučite izraditi neprobojne lozinke i postaviti dvostruku provjeru autentičnosti (2FA).</p>
                <a href="blog.html" class="gumb">Saznaj više</a>
            </div>
            <div class="kartica">
                <h3>💻 Zaštita računala</h3>
                <p>Savjeti za redovito ažuriranje sustava, antivirusnu zaštitu i izradu sigurnosnih kopija.</p>
                <a href="blog.html" class="gumb">Saznaj više</a>
            </div>
        </div>
    </div>

    <?php include "podnozje.php"; ?>

</body>
</html>