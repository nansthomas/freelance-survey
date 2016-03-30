<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$name = $_POST['name'];
$description = $_POST['description'];
$slug = str_replace(' ', '-', $name);

$survey = New Survey($pdo);
$add = $survey->addNewSurvey($name, $slug, $description);

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
        <form class="addSurvey" action="addSurvey.php" method="post">
          <p class="control">
            <input class="input" type="text" name="name" placeholder="Name of the Survey">
          </p>
          <p class="control">
            <textarea class="textarea" name="description" placeholder="Description"></textarea>
          </p>
          <p class="control is-centered">
            <button class="button is-primary is-loading create">Create</button>
          </p>
        </form>
      </div>
    </div>

  </section>

  <script type="text/javascript">

  // Change the button Statut

  var input = document.querySelector('textarea');
  var create = document.querySelector('.create');

  input.addEventListener('input', function(){
    if (input.value == "") {
      create.classList.add("is-loading");
    } else {
      create.classList.remove("is-loading");
    }

  });

  </script>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
