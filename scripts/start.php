<?php
    require_once('../models/QuestionFactory.php');
    require_once('../models/Question.php');
    require_once('../models/Answer.php');

    session_start();

    if(isset($_GET['username'])) {
        $_SESSION['username'] = $_GET['username'];
    }
    else {
        $_SESSION['username'] = $_GET['uknown_user'];
    }
    $_SESSION['score'] = 0;

    $questions = QuestionFactory::getQuestions();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach($questions as $question){?>

        <div style="border:1px solid black">
            <h5><?=$question->getText()?></h5>
            <input type="radio" data-correct="a" onclick="getAnswer(event)" name="<?php echo($question->getId()); ?>"> - <?=$question->getAnswer1()->getText()?>
            <input type="radio" onclick="getAnswer(event)" name="<?php echo($question->getId()); ?>"> - <?=$question->getAnswer2()->getText()?>
        </div>

    <?php } ?>

    <a href="">SUBMIT</a>

    <script src="../js/main.js"></script>
</body>
</html>
