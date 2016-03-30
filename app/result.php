<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$survey = new Survey($pdo, new Item($pdo));
$items = $survey->getLovedItems($_GET['survey_slug']);

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey - Result</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-medium is-primary is-bold">

    <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <h1 class="title">
          Result
        </h1>
        <h2 class="subtitle">
          Here you can see what your customer's love.
        </h2>
      </div>
    </div>

  </section>

  <section>

      <div class="container result">
        <?php foreach ($items as $item): ?>
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?= $item->picture ?>" alt="">
            </figure>
          </div>

          <div class="card-content">
            <div class="content">
              <h3><?= $item->title ?></h3>
              <p><?= $item->description ?></p>
              <a href="#">#<?= $item->source ?></a>
            </div>
          </div

        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
