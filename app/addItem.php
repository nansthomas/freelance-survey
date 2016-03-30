<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$survey_id = $_GET['survey_id'];
$count = $_GET['count'];

if ($_POST) {

  $title = $_POST['title'];
  $picture = $_POST['picture'];
  $source = $_POST['source'];
  $croissant = $_POST['croissant'];
  $description = $_POST['description'];
  $slug = str_replace(' ', '-', $title);

  $item = New Item($pdo);
  $add = $item->addNewItem($survey_id, $title, $picture, $source, $description, $slug, $croissant);
}

?>

<head>
  <meta charset="UTF-8">
  <title>FreelanceSurvey - Add a Item</title>
  <link rel="stylesheet" href="/../core/styles/bulma.min.css">
  <link rel="stylesheet" href="/../core/styles/custom.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <section class="hero is-primary is-fullheight">

    <?php require_once __DIR__ . '/../core/templates/menu.php'; ?>

    <div class="hero-content">
      <div class="container">
        <h1 class="title">Add a Item.</h1>
        <h2 class="subtitle">You can add as many item you want.</h2>
        <br>
        <form class="addSurvey" action="addItem.php?survey_id=<?= $survey_id ?>&count=<?= $count + 1 ?>" method="post">
          <p class="control is-centered">
            <span class="select">
              <select name="survey_id">
                <option value="<?= $survey_id ?>"><?= $survey_id ?></option>
              </select>
            </span>
          </p>
          <p class="control">
            <input class="input" type="text" name="title" placeholder="Title" value="">
          </p>
          <p class="control">
            <input class="input" type="text" name="picture" placeholder="Link to picture" value="">
          </p>
          <p class="control">
            <input class="input" type="text" name="source" placeholder="Source (eg: dribbble)" value="">
          </p>
          <p class="control">
            <textarea class="textarea" name="description" placeholder="Description"></textarea>
          </p>
          <p class="control">
            <input type="hidden" name="croissant" value="<?= $count ?>">
            <input class="button is-primary is-medium" type="submit" value="Create">
          </p>
        </form>
      </div>
    </div>

  </section>

  <?php require_once __DIR__ . '/../core/templates/footer.php'; ?>

</body>
