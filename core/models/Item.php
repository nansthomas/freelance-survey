<?php

class Item {

    function __construct ($pdo) {

        $this->pdo = $pdo;
    }

    // Recupere the Item in the good SurveyID

    public function getItemBySurveyId ($id, $slug) {


      if ($slug) {
        $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.slug = :slug');
        $itemQuery->bindParam(':slug', $slug);
      } else {
        $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.croissant = 1');
      }

      $itemQuery->bindParam(':survey_id', $id);

      $itemQuery->execute();

      $items = $itemQuery->fetch();

      return $items;
    }

    // We filter the Item to getNextItem Function

    public function getItemBySort ($id, $sort = 1) {

      $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.croissant = :currSort');

      $itemQuery->bindParam(':survey_id', $id);
      $itemQuery->bindParam(':currSort', $sort);

      $itemQuery->execute();

      $items = $itemQuery->fetch();

      return $items;
    }

    // GetNewtItem

    public function getNextItem ($id, $slug) {

      $curr = $this->getItemBySurveyId($id, $slug);

      $item = $this->getItemBySort($id, intval($curr->croissant + 1));

      return $item;
    }

    // Update in the Database, True or False for the vote

    public function voteItemBySlug ($survey_id, $slug, $vote) {

      $itemQuery = $this->pdo->prepare('UPDATE Item as i SET i.like=:vote WHERE i.survey_id = :survey_id AND i.slug = :slug');

      $itemQuery->bindParam(':survey_id', $survey_id);
      $itemQuery->bindParam(':slug', $slug);
      $itemQuery->bindParam(':vote', $vote);

      $q = $itemQuery->execute();

      return $q;
    }

    // Create a New Item

    public function addNewItem ($survey_id, $title, $picture, $source, $description, $slug, $count) {

      $itemQuery = $this->pdo->prepare("INSERT INTO Item (title, picture, source, description, slug, Survey_id, User_id, croissant) VALUES (:title, :picture, :source, :description, :slug, :survey_id, 1, :croissant)");

      $itemQuery->bindParam(':title', $title);
      $itemQuery->bindParam(':picture', $picture);
      $itemQuery->bindParam(':source', $source);
      $itemQuery->bindParam(':description', $description);
      $itemQuery->bindParam(':slug', $slug);
      $itemQuery->bindParam(':survey_id', $survey_id);
      $itemQuery->bindParam(':croissant', $count);

      $q = $itemQuery->execute();

      return $q;
    }

    public function getLovedItem ($survey_id) {

      $itemQuery = $this->pdo->prepare('SELECT * FROM Item as i WHERE i.survey_id = :survey_id AND i.like = 1');

      $itemQuery->bindParam(':survey_id', $survey_id);

      $itemQuery->execute();

      $lovedItems = $itemQuery->fetchAll();

      return $lovedItems;
    }
}
