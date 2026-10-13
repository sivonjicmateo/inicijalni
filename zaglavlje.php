
<header>
    <meta charset="UTF-8">
    <title><?php echo $naslovStranice; ?></title>
    <link rel="stylesheet" href="stil.css">
    

        <a href="index.html" class="logo">🛡️ CyberShield Croatia</a>
        <nav>
        <a href="index.php" class="<?php echo ($trenutnaStranica == 'pocetna') ? 'aktivna' : ''; ?>">Početna</a>
            <a href="o-nama.html">O nama</a>
            <a href="usluge.php" class="<?php echo ($trenutnaStranica == 'usluge') ? 'aktivna' : ''; ?>">Usluge</a>
            <a href="blog.html">Blog</a>
            <a href="kontakt.html">Kontakt</a>
        </nav>
    </header>