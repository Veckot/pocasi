<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled meteorologických stanic</title>
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0 0 10px;
        }
        .card a {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Přehled meteorologických stanic ve spolkové zemi <?= $bundesland['nazev']; ?></h1>
    <div>
        <?php foreach ($station as $stanice): ?>
            <div class="card">
                <h3><?= $stanice['nazev']; ?></h3>
                <p>Zeměpisná šířka: <?= $stanice['sirka']; ?></p>
                <p>Zeměpisná délka: <?= $stanice['delka']; ?></p>
                <p>Nadm. výška: <?= $stanice['nadmorska_vyska']; ?> m</p>
                <a href="<?= base_url('pocasi/stranka2/' . $stanice['id']); ?>">Detail stanice</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
