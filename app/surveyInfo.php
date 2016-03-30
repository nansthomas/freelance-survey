<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

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
        <h1 class="title">Wow, the setup is ok !</h1>
        <h2 class="subtitle">After adding items you can share this link to your customers.</h2>
        <br>
        <p class="control">
          <input class="input is-large" type="text" readonly="readonly" value="http://localhost:8888/app/survey.php?survey_slug=site-hetic">
        </p>
        <br>
        <a href="addItem.php" class="button is-primary is-medium additem"><i class="fa fa-plus"></i> Ajouter des items</a>
      </div>
    </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
