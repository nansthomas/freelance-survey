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

        $survey = $query->fetchAll();

        return $survey;
    }

    public function readBySlug ($slug) {

      $query = $this->pdo->prepare('SELECT * FROM Survey as s WHERE s.slug = :slug LIMIT 1');

      $query->bindParam(':slug', $slug);

      $query->execute();

      return $query->fetch();
    }

    public function readItem ($slug, $item_slug) {

        $survey = $this->readBySlug($slug);

        $items = $this->items->getItemBySurveyId($survey->id, $item_slug);

        $survey->item = $items;

        return $survey;
    }

    // public function addSurvey ($name, $description) {
    //
    //
    //
    // }
}
