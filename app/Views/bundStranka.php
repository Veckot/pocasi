<?= $this->extend('layout/sablona'); ?>
<?= $this->section("content"); ?>

<?php

use App\Models\Station;

// Prepare table data
$table = new \CodeIgniter\View\Table();
$headers = array('Id', 'Zem', 'Zkratka', 'Mapa', 'Vlajecka');
$table->setHeading($headers);

foreach ($bundesland as $row) {
    $imgFlag = array(
        "src" => "img/flag/".$row->flag_id,
        "alt" => "",
        "class" => "img-fluid",
        "style" => "width: 120%; height: auto;"
    );
    $imgMap = array(
        "src" => "img/map/".$row->map_id,
        "alt" => "",
        "class" => "img-fluid",
        "style" => "width: 60px; height: auto;"
    );

    // Add a row with data
    $table->addRow(
        $row->id, 
        anchor("bund_stationStranka/".$row->id, $row->name), 
        $row->short_name, 
        img($imgMap), 
        img($imgFlag)
    );
}

$template = array(
    'table_open' => '<table class="table table-bordered table-striped">',
    'thead_open' => '<thead>',
    'thead_close' => '</thead>',
    'heading_row_start' => '<tr>',
    'heading_row_end' => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end' => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
);

$table->setTemplate($template);

// Render the table
echo $table->generate();

?>

<!-- CSS for Styling -->
<style>
    /* General Page Styling */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7f6;
        color: #333;
        padding: 20px;
    }

    /* Table Styling */
    .table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    .table td img {
        max-width: 80px;
        height: auto;
        border-radius: 5px;
    }

    /* Hover Effects */
    .table tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table th, .table td {
            font-size: 12px;
        }
        .table img {
            max-width: 50px;
        }
    }

    /* Link Styling */
    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<?= $this->endSection(); ?>
