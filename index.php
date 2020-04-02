<?php
    require_once('models/ScoreFactory.php');
    $scores = ScoreFactory::getScores();
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
    <form action="scripts/start.php" method="get">
        Name: <input type="text" name="username">
        <input type="submit" value="Start test!" name="submit">
    </form>

    <h2>ScoreBoard:</h2>

    <table border='1'>
        <thead>
            <td>name</td>
            <td>score</td>
        </thead>
        <?php foreach ($scores as $score) { ?>
            <tr>
                <td><?=$score->getUserName()?></td>
                <td><?=$score->getScore()?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
