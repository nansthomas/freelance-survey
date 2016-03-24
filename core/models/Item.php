<?php

class Item {

    function __construct ($pdo) {

        $this->pdo = $pdo;
    }

    public function getItemBySurveyId ($id) {

        $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id');

        $itemQuery->bindParam(':survey_id', $id);

        $itemQuery->execute();

        $items = $itemQuery->fetchAll();

        return $items;
    }
}
