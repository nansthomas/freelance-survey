<?php

error_reporting(E_ALL);

require_once __DIR__ . '/../core/bootstrap.php';

$user = new User($pdo);

// Affichage des données
echo '<pre>';
print_r($user->getUser());
echo '</pre>';
