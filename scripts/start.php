<?php
    require_once('../models/QuestionFactory.php');
    require_once('../models/Question.php');
    require_once('../models/Answer.php');

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
    <h1>Correct answers <span id="correctCountDisplay">0</span> / 10</h1>
    <?php foreach($questions as $question){?>

        <div style="border:1px solid black">
            <h5><?=$question->getText()?></h5>
            <input type="radio" correct="<?php echo($question->getAnswer1()->getIsCorrect()); ?>" onclick="getAnswer(event)" name="<?php echo($question->getId()); ?>"> - <?=$question->getAnswer1()->getText()?>
            <input type="radio" correct="<?php echo($question->getAnswer2()->getIsCorrect()); ?>" onclick="getAnswer(event)" name="<?php echo($question->getId()); ?>"> - <?=$question->getAnswer2()->getText()?>
        </div>

    <?php } ?>

    <button id="submit">Submit!</button>

    <script src="../js/main.js"></script>
</body>
</html>
