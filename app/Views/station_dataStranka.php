<?= $this->extend('layout/sablona'); ?>
<?= $this->section("content"); ?>

<div class="container my-5">
    <h1 class="mb-4">Stanice <?= $station->S_ID; ?></h1>

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination .page-link {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            text-decoration: none;
        }

        .pagination .page-link:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        .pagination .active .page-link {
            background-color: #0056b3;
            color: #fff;
            border-color: #0056b3;
        }

        .pagination .disabled .page-link {
            color: #6c757d;
            background-color: #f1f1f1;
            border-color: #dee2e6;
            cursor: not-allowed;
        }

        .pagination .page-item:first-child .page-link {
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .pagination .page-item:last-child .page-link {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }
    </style>

    <?php
    $table = new \CodeIgniter\View\Table();
    $headers = array('Id', 'Datum', 'Kvalita', 'Vlhkost', 'Mid vítr', 'Max vítr');
    $table->setHeading($headers);

    foreach ($data as $row) {
        $table->addRow(
            $row->id,
            $row->date,
            $row->quality,
            $row->humidity,
            $row->mid_wind,
            $row->max_wind
        );
    }

    // Define Bootstrap Table Template
    $template = array(
        'table_open' => '<table class="table table-hover table-striped table-bordered">',
        'thead_open' => '<thead class="thead-dark">',
        'thead_close' => '</thead>',
        'heading_row_start' => '<tr>',
        'heading_row_end' => '</tr>',
        'heading_cell_start' => '<th scope="col">',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end' => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'table_close' => '</table>'
    );

    $table->setTemplate($template);

    echo $table->generate();
    ?>
</div>

<!-- Pagination -->
<div class="pagination-links">
    <?= $pagination; ?>
</div>

<?= $this->endSection(); ?>