
<?php
    include 'dbconfig.php'; 
    $score = 0;
    if(isset($_POST['userans'])){
        $sessionResult = $_SESSION['result'];
        $userResult = $_POST['userans'];
        
        if (isset($_SESSION['score'])) {
            $score = $_SESSION['score'];
        }
    
        if($sessionResult == $userResult){
            $score += 1;
            $_SESSION['score'] = $score;
        }else{
            $sql= "UPDATE `info` SET `score` = ".$_SESSION['score']." WHERE username='".$_SESSION['currnetUsername']."'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: result.php");
            die();
        }
    } else {
        $_SESSION['score'] = 0;
    }
?>