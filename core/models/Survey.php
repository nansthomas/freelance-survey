<?php

class Survey {

    function __construct ($pdo, $item) {

        $this->pdo = $pdo;
        $this->items = $item;

    }

    // Select all the Survey by the ID

    public function getSurveyById ($id) {

        $query = $this->pdo->prepare('SELECT * FROM Survey WHERE id = :id');

        $query->bindParam(':id', $id);

        $query->execute();

        $survey = $query->fetchAll();

        return $survey;
    }

    // Select Only one Survey by the slug

    public function readBySlug ($slug) {

      $query = $this->pdo->prepare('SELECT * FROM Survey as s WHERE s.slug = :slug LIMIT 1');

      $query->bindParam(':slug', $slug);

      $query->execute();

      return $query->fetch();
    }

    // Get Item Slug in the Parent Survey
    public function readItem ($slug, $item_slug) {

        $survey = $this->readBySlug($slug);

        $items = $this->items->getItemBySurveyId($survey->id, $item_slug);

        $survey->item = $items;

        return $survey;
    }

    // Add a New Survey

    public function addNewSurvey ($name, $slug, $description) {

      $itemQuery = $this->pdo->prepare("INSERT INTO Survey (name, slug, description, User_id) VALUES (:name, :slug, :description, 1)");

      $itemQuery->bindParam(':name', $name);
      $itemQuery->bindParam(':slug', $slug);
      $itemQuery->bindParam(':description', $description);

      $q = $itemQuery->execute();

      return $q;
    }
}
