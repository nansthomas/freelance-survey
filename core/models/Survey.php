<?php

class Survey {

    function __construct ($pdo, $item) {

        $this->pdo = $pdo;
        $this->items = $item;
    }

    public function getSurveyById ($id) {

        $query = $this->pdo->prepare('SELECT * FROM Survey WHERE id = :id');

        $query->bindParam(':id', $id);

        $query->execute();

        // Éxécution de la requête et récupération des données
        $survey = $query->fetchAll();

        return $survey;
    }

    public function readBySlug ($slug) {

        $query = $this->pdo->prepare('SELECT * FROM Survey as s WHERE s.slug = :slug LIMIT 1');

        $query->bindParam(':slug', $slug);

        $query->execute();

        $survey = $query->fetch();

        $items = $this->items->getItemBySurveyId($survey->id);

        $survey->items = $items;

        return $survey;
    }
}
