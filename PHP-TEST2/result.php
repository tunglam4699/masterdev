<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>
    <div class="Result">
        <div class="resultBox">
            <div><b>Game Over</b></div>
            <div>Your Score: <?php 
            if(session_status() === PHP_SESSION_NONE)
            {
              session_start();
            }
            echo $_SESSION['score']?></div>
            <div>
                <button class="btnPlayAgain" onclick="reLoad()">Play Again</button>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>