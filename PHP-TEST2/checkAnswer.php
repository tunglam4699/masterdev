<?php
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
            include 'result.php';
            die();
        }
    } else {
        $_SESSION['score'] = 0;
    }
?>