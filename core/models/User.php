<?php

class User {

    function __construct ($pdo) {

        $this->pdo = $pdo;
    }

    public function getUser () {

        $query = $this->pdo->query('SELECT * FROM User');

        // Éxécution de la requête et récupération des données
        $user = $query->fetchAll();

        return $user;
    }
}
