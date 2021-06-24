<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include 'includes/checkAnswer.php';
    include 'includes/renderQA.php';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>GAME</title>
</head>

<body>
    <form method="post" action="question.php">
        <div class="game" id="game">
            <div class="root">
                <div class="top">
                    <div class="userName"><?php echo $_SESSION['currnetUsername']?></div>
                    <div class="score"><?php echo $score ?></div>
                </div>
                <div class="main">
                    <div class="question"><?php echo $question ?></div>
                    <input type="button" class="btnSubmit" name="click" value="Click on the correct answer">
                    <div class="answerBox">
                        <input required type="submit" class="answer" name="userans" onclick="stopTime()" value="<?php echo $arrayAnwer[0] ?>">
                        <input required type="submit" class="answer" name="userans" onclick="stopTime()" value="<?php echo $arrayAnwer[1] ?>">
                        <input required type="submit" class="answer" name="userans" onclick="stopTime()" value="<?php echo $arrayAnwer[2] ?>">
                        <input required type="submit" class="answer" name="userans" onclick="stopTime()" value="<?php echo $arrayAnwer[3] ?>">
                    </div>
                </div>

                <div class="bottom">
                    <input class="resetGame" type="button" onclick="reLoad()" name="start" value="Reset Game">
                <div class="timeRemaining" id="countdown">Time Remaining</div>
                </div>
            </div>
        </div>
    </form>
    <script src="js/index.js"></script>
</body>

</html>