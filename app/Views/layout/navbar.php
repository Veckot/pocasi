<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Pocasi SIGMA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <?php
                $nav = array(
                    'class' => 'nav-link'
                );
            ?>
              <li class="nav-item">
              <?= anchor('/', 'Germanske regiony', $nav); ?>
              </li>
              <li class="nav-item">
                <?= anchor('allStation', 'Funny Laboratorie', $nav); ?></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>