<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$item = New Item($pdo);
$survey = New Survey($pdo, $item);

$surveyObj = $survey->readBySlug($_GET['survey_slug']);

$vote = $item->voteItemBySlug($surveyObj->id, $_GET['item_slug'], $_GET['vote']);

$next = $item->getNextItem($surveyObj->id, $_GET['item_slug']);

header('Location: survey.php?survey_slug='. $_GET['survey_slug'] .'&item_slug='. $next->slug);
