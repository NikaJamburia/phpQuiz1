<?php
    require_once("Score.php");
    require_once("config/db.php");

    class ScoreFactory {
        public static function getScores() {
            
            $database = new Db();
            $db = $database->connect();

            $query = "SELECT * FROM scores ORDER BY score DESC";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $scores = $stmt->fetchAll(); 

            $scoresToReturn = [];
            foreach($scores as $score) {
                array_push($scoresToReturn, new Score($score['user_name'], $score['score']));
            }

            return $scoresToReturn;
        }
    }
?>