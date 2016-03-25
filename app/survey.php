<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$survey = new Survey($pdo, new Item($pdo));

$s = $survey->readItem($_GET['survey_slug'], $_GET['item_slug']);

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey - Survey</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-primary is-fullheight">

  <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?= $s->item->picture ?>" alt="">
            </figure>
          </div>

          <div class="card-content">
            <div class="content">
              <h3><?= $s->item->title ?></h3>
              <p><?= $s->item->description ?></p>
              <a href="#">#dribbble</a> <a href="#">#logodesign</a>
              <br>
              <br>
              <a href="vote.php?survey_slug=<?= $s->slug ?>&item_slug=<?= $s->item->slug ?>&vote=1" class="button is-success" value="true" name="item_2"><i class="fa fa-check"></i>Like</a>
              <a href="vote.php?survey_slug=<?= $s->slug ?>&item_slug=<?= $s->item->slug ?>&vote=0" class="button is-danger" value="false" name="item_2"><i class="fa fa-times"></i>Dislike</a>
            </div>
          </div

        </div>
      </div>
    </div>
  </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
