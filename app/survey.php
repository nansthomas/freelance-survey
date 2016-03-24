<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$survey = new Survey($pdo, new Item($pdo));


$s = $survey->readBySlug($_GET['survey_slug']);
?>


<h2><?= $s->name ?></h2>

<form class="" action="vote.php?survey_id=<?= $survey->id ?>" method="post">
    <?php foreach ($s->items as $item): ?>
        <p><?= $item->title ?></p>
        Non: <input type="radio" name="vote" value="0">
        Oui: <input type="radio" name="vote" value="1">
        <hr>
    <?php endforeach; ?>
</form>
