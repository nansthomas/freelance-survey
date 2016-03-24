<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

// Affichage des données
// echo '<pre>';
// print_r($user->getUser());
// echo '</pre>';

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-primary is-fullheight">

    <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <h1 class="title">Knowing what your customers love.</h1>
        <h2 class="subtitle">Fast. Simple. Free.</h2>
      </div>
    </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
