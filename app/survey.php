<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

// $survey = new Survey($pdo, new Item($pdo));
//
// $s = $survey->readBySlug($_GET['survey_slug']);

?>


<!-- <h2><?= $s->name ?></h2>

<form class="" action="vote.php?survey_id=<?= $survey->id ?>" method="post">
    <?php foreach ($s->items as $item): ?>
        <p><?= $item->title ?></p>
        Non: <input type="radio" name="vote" value="0">
        Oui: <input type="radio" name="vote" value="1">
        <hr>
    <?php endforeach; ?>
</form> -->

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
              <img src="/../core/img/demoimg.jpeg" alt="">
            </figure>
          </div>

          <div class="card-content">
            <div class="content">
              <h3>Titre de l'Item</h3>
              <p>C'est un item super cool, il est vraiment chouette, j'aime ses couleurs et ses formes. Comme ta mère.</p>
              <a href="#">#dribbble</a> <a href="#">#logodesign</a>
              <br>
              <br>
              <form action=" ">
                <button class="button is-success" value="true" name="item_2"><i class="fa fa-check"></i>Like</button>
                <button class="button is-danger" value="false" name="item_2"><i class="fa fa-times"></i>Dislike</button>
              </form>
            </div>
          </div

        </div>
      </div>
    </div>
  </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
