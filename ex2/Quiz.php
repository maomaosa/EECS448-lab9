<?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $score = 0;

    echo "<q1>Question1: What is the number of this course?</q1><br>";
    echo "<q1>You answered: ". $q1 ."</q1><br>";
    echo "<q1>Correct answer: 448</q1><br><br>";
    if($q1 == "448")
    {$score+=20;}

    echo "<q2>Question2: What is the least number of questions for this exercise?</q2><br>";
    echo "<q2>You answered: ". $q2 ."</q2><br>";
    echo "<q2>Correct answer: 5</q2><br><br>";
    if($q2 == "5")
    {$score+=20;}

    echo "<q3>Question3: When lab9 due?</q3><br>";
    echo "<q3>You answered: ". $q3 ."</q3><br>";
    echo "<q3>Correct answer: 11-21</q3><br><br>";
    if($q3 == "11-21")
    {$score+=20;}

    echo "<q4>Question4: How many exercises does lab9 have?</q4><br>";
    echo "<q4>You answered: ". $q4 ."</q4><br>";
    echo "<q4>Correct answer: 3</q4><br><br>";
    if($q4 == "3")
    {$score+=20;}

    echo "<q5>Question5: What is the credit for exercise 2 ?</q5><br>";
    echo "<q5>You answered: ". $q4 ."</q5><br>";
    echo "<q5>Correct answer: 30</q5><br><br>";
    if($q5 == "30")
    {$score+=20;}

    echo "<score>Your score: ".$score. "%</score>"

?>