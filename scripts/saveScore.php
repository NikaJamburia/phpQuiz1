<?php
    require_once('../models/QuestionFactory.php');
    require_once('../models/Question.php');
    require_once('../models/Answer.php');

    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(isset($_POST['score'])) {
        $score = $_POST['score'];
    }

    $database = new Db();
    $db = $database->connect();

    $query = "INSERT INTO scores(user_name, score) VALUES(?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $score]);
    
    return true;
?>