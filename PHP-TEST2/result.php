<?php
require_once 'includes/dbconfig.php';
$sql = "SELECT DISTINCT `id`, `username`, `score` FROM `info` ORDER BY `score` DESC LIMIT 10;";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>GAME</title>
</head>

<body>
    <div class="Result">

        <div class="resultBox">
            <button class="btnHighScore" id="myBtn"><img src="crown.png"></button>

            <div><b>Game Over</b></div>
            <div>Your Score: <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                   
                                }
                                echo $_SESSION['score'] ?></div>
            <button class="btnPlayAgain" onclick="reLoad()">Play Again</button>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <div><img src="crown.png"></div>
                        <div>Bảng Xếp Hạng</div>
                        <div><img src="crown.png"></div>
                    </div>
                    <div class="highScore" id="customers">

                        <table>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['score']; ?></td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="js/index.js"></script>
</body>

</html>