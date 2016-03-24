<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey - Add a Item</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-primary is-left">

    <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <h1 class="title">Add some items.</h1>
        <h2 class="subtitle">Here, just add what you want to make love or not your customers.</h2>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="heading">
        <a class="button is-primary">Add an item</a>
      </div>
      <div class="box">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="/../core/img/demoimg.jpeg" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Title</strong> <small>www.dribbble.com</small>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
              </p>
            </div>
      <nav class="navbar">
        <div class="navbar-left">
          <a class="navbar-item">
            <span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span>
          </a>
          <a class="navbar-item">
            <span class="icon is-small"><i class="fa fa-trash-o"></i></span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>
    </div>
  </section>


  <!-- <section class="hero is-primary is-fullheight is-left">

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

  </section> -->

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
