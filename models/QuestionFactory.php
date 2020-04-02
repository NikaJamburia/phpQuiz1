<?php
    require_once("Question.php");
    require_once("Answer.php");
    require_once("../config/db.php");

    class QuestionFactory {
        public static function getQuestions() {
            
            $database = new Db();
            $db = $database->connect();

            $query = "SELECT * FROM questions";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $questions = $stmt->fetchAll(); 

            $questionsToReturn = [];
            foreach($questions as $question) {
                $query = "SELECT * FROM answers WHERE question_id = ? ";
                $stmt = $db->prepare($query);
                $stmt->execute([$question['id']]);
                $answers = $stmt->fetchAll(); 

                $answer1 = new Answer($answers[0]['text'], $answers[0]['isCorrect'], $answers[0]['id'] );
                $answer2 = new Answer($answers[1]['text'], $answers[1]['isCorrect'],  $answers[1]['id']);

                array_push($questionsToReturn, new Question($question['text'], $answer1, $answer2, $question['id']));
            }

            return $questionsToReturn;
        }
    }
?>