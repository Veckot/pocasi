<?= $this->extend('layout/sablona'); ?>
<?= $this->section("content"); ?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled stanic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flag-img {
            width: 10%;
            height: auto;
            margin-left: 10px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #007BFF;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>

<body>
    <?php
    
    ?>
    <div class="container my-5">
    <h1 class="mb-4">
        Přehled meteorologických stanic
    </h1>

    <div class="row">
        <?php foreach ($station as $stanice): 
            $imgFlag = array(
                "src" => base_url("img/flag/" . $stanice->flag_id), // Ensure the image path is correct
                "alt" => "Vlajka",
                "class" => "flag-img img-fluid", // Use Bootstrap's img-fluid class for responsiveness
                "style" => "width: 100%; height: auto;" // Full width and maintain aspect ratio
            ); ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img <?= img($imgFlag); ?> class="card-img-top" alt="<?= esc($imgFlag['alt']); ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= anchor("station_dataStranka/" . $stanice->S_ID, $stanice->place); ?>
                        </h5>
                        <p class="card-text">
                            <strong>Zeměpisná šířka:</strong> <?= esc($stanice->geo_latitude); ?>
                        </p>
                        <p class="card-text">
                            <strong>Zeměpisná délka:</strong> <?= esc($stanice->geo_longtitude); ?>
                        </p>
                        <p class="card-text">
                            <strong>Nadm. výška:</strong> <?= esc($stanice->height); ?> m
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?= $this->endSection(); ?>