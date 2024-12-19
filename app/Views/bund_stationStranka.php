<?= $this->extend('layout/sablona'); ?>
<?= $this->section("content"); ?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled stanic ve spolkové zemi</title>

</head>

<body>
    <div class="container">
        <h1 class="my-4">Přehled meteorologických stanic ve spolkové zemi: <?= $bundesland->name; ?></h1>

        <div class="row">
            <?php foreach ($station as $stanice): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= anchor("station_dataStranka/".$stanice->S_ID, $stanice->place); ?></h5>
                            <p class="card-text"><strong>Zeměpisná šířka:</strong> <?= $stanice->geo_latitude; ?></p>
                            <p class="card-text"><strong>Zeměpisná délka:</strong> <?= $stanice->geo_longtitude; ?></p>
                            <p class="card-text"><strong>Nadm. výška:</strong> <?= $stanice->height; ?> m</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?= $this->include("layout/js");?>
</body>

</html>

<?= $this->endSection(); ?>
