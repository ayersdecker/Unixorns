<?php
 var $answer1a = value2;
 var $answer1b = value3;
 var $answer1c = value4;
 var $answer1d = value5;
 ?>

<Aside>
    <h1>Quiz</h1>
    <p>What is ?</p>
    <form action="quiz.php" method="post">
        <input type="radio" name="answer" value="a">
        <label>$answer1a</label>
        <br>
        <input type="radio" name="answer" value="b">
        <label>$answer1b</label>
        <br>
        <input type="radio" name="answer" value="c">
        <label>$answer1c</label>
        <br>
        <input type="radio" name="answer" value="d">
        <label>$answer1d</label>
        <br>
        <input type="submit" value="Submit">

</Aside>
