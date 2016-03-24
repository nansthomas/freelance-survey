<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey - Add a Survey</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-primary is-fullheight">

    <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <h1 class="title">Create a Survey.</h1>
        <h2 class="subtitle">This will allow you to send the survey to your customers.</h2>
        <br>
        <form class="addSurvey" action=" ">
          <p class="control">
            <input class="input" type="text" name="name" placeholder="Name of the Survey">
          </p>
          <p class="control is-loading">
            <input class="input" type="text" name="slug" placeholder="Slug" value="">
          </p>
          <p class="control">
            <textarea class="textarea" name="description" placeholder="Description"></textarea>
          </p>
          <p class="control is-centered">
            <button class="button is-primary is-loading">Create</button>
          </p>
        </form>
      </div>
    </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
