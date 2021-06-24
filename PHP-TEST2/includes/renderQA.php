<?php 
    $number1 = 0;
    $number2 = 0;
    $arrayOperator = array("+","-","x");
    $question;
    $arrayAnwer = array();
    $result = 0;
    function renderQuestion() {
        global  $number1, $number2 ,$question,$arrayOperator, $result;
        $number1 = rand(1,99);
        $number2 = rand(1,99);
        $operator = $arrayOperator[array_rand($arrayOperator,1)];
        $question = "$number1 $operator $number2"; 
        correctAnswer($number1,$number2,$operator);
        $_SESSION['result'] = $result;

    }

    function correctAnswer($number1,$number2,$operator){
        global $result;
        switch ($operator){
            case "+":
                $result = $number1 + $number2;
                break;
            case "-":
                $result = $number1 - $number2;
                break;
            case "x":
                $result = $number1 * $number2;
                break;
        }             
    }

    function renderAnswer() {
        global $arrayAnwer, $result;
        $arrayAnwer[0] = rand(1,99) + 1;
        $arrayAnwer[1] = rand(1,99) + 2;
        $arrayAnwer[2] = rand(1,99) + 3;
        $arrayAnwer[3] = $result;
        shuffle($arrayAnwer);     
    }
    function renderFunction() {
        renderQuestion();
        renderAnswer();
    }
    renderFunction();


?>
