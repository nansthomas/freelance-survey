<?php

class Item {

    function __construct ($pdo) {

        $this->pdo = $pdo;
    }

    public function getItemBySurveyId ($id, $slug) {

        $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.slug = :slug');

        $itemQuery->bindParam(':survey_id', $id);
        $itemQuery->bindParam(':slug', $slug);

        $itemQuery->execute();

        $items = $itemQuery->fetch();

        return $items;
    }

    public function getItemBySort ($id, $sort = 1) {

      $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.croissant = :currSort');

      $itemQuery->bindParam(':survey_id', $id);
      $itemQuery->bindParam(':currSort', $sort);

      $itemQuery->execute();

      $items = $itemQuery->fetch();

      return $items;
    }

    public function voteItemBySlug ($survey_id, $slug, $vote) {

      $itemQuery = $this->pdo->prepare('UPDATE Item as i SET i.like=:vote WHERE i.survey_id = :survey_id AND i.slug = :slug');

      $itemQuery->bindParam(':survey_id', $survey_id);
      $itemQuery->bindParam(':slug', $slug);
      $itemQuery->bindParam(':vote', $vote);

      $q = $itemQuery->execute();

      return $q;
    }

    public function getNextItem ($id, $slug) {

      $curr = $this->getItemBySurveyId($id, $slug);

      $item = $this->getItemBySort($id, intval($curr->croissant + 1));

      return $item;
    }

    public function addNewItem ($survey_id, $title, $picture, $source, $description, $slug) {

      $itemQuery = $this->pdo->prepare('INSERT INTO Item VALUES ('', ':title', ':picture', ':source', ':description', '', '', ':slug', ':survey_id', '1')');

      $itemQuery->bindParam(':title', $title);
      $itemQuery->bindParam(':picture', $picture);
      $itemQuery->bindParam(':source', $source);
      $itemQuery->bindParam(':description', $description);
      $itemQuery->bindParam(':slug', $slug);

      $q = $itemQuery->execute();

      return $q;
    }
}
