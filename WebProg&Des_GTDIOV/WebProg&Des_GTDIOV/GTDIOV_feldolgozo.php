<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Adatok Feldolgozása</title>
    <link rel="stylesheet" href="GTDIOV_index.css">
</head>
<body>
    <section>
        <h2>Beküldött Űrlap Adatok</h2>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nev = htmlspecialchars($_POST['nev'] ?? 'Nincs megadva');
                    $varos = htmlspecialchars($_POST['varos'] ?? 'Nincs megadva');
                    $komment = htmlspecialchars($_POST['komment'] ?? 'Nincs megadva');
                    $biztonsag = isset($_POST['biztonsag']) ? htmlspecialchars($_POST['biztonsag']) : 'Nem választottad';
                    $adatvedelem = isset($_POST['adatvedelem']) ? htmlspecialchars($_POST['adatvedelem']) : 'Nem választottad';
                    $elegedettseg = htmlspecialchars($_POST['elegedettseg'] ?? 'Nem választottál elégedettségi szintet');
                    $kedvenc_szin = htmlspecialchars($_POST['kedvenc_szin'] ?? 'Nem választottál színt');
                    $eletkor = htmlspecialchars($_POST['age'] ?? 'Nem adtad meg az életkorodat');
                    $datum = htmlspecialchars($_POST['datum'] ?? 'Nem választottál dátumot');

                    // Adatok megjelenítése
                    echo "<p><strong>Név:</strong> $nev</p>";
                    echo "<p><strong>Város:</strong> $varos</p>";
                    echo "<p><strong>Megjegyzés:</strong> $komment</p>";
                    echo "<p><strong>Kiberbiztonság érdekli:</strong> $biztonsag</p>";
                    echo "<p><strong>Adatvédelem érdekli:</strong> $adatvedelem</p>";
                    echo "<p><strong>Elégedettség:</strong> $elegedettseg</p>";
                    echo "<p><strong>Kedvenc szín:</strong> $kedvenc_szin</p>";
                    echo "<p><strong>Életkor:</strong> $eletkor</p>";
                    echo "<p><strong>Kiválasztott dátum:</strong> $datum</p>";
                } else {
                    echo "<p>Nincs beküldött adat.</p>";
                }
            ?>


        <a href="GTDIOV_index.html">Vissza az űrlaphoz</a>
    </section>
</body>
</html>
