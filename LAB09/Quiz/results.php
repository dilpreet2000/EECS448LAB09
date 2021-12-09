<!DOCTYPE html>
<html>
 
<head>
 <meta charset=UTF-8" />
 
 <title>PHP Quiz</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1> Result </h1>
 
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "Origami") { $totalCorrect++; }
            echo "<div>The art of paper folding is called:</div>";
            echo "<div>Your answer : $answer1</div>";
            echo "<div>Correct answer : Origami</div>";
            echo "<br></br>";

            if ($answer2 == "Digital Marketing") { $totalCorrect++; }
            echo "<div>SEO is Part Of...</div>";
            echo "<div>Your answer : $answer2</div>";
            echo "<div>Correct answer : Digital Marketing</div>";
            echo "<br></br>";
            if ($answer3 == "Server Side Script") { $totalCorrect++; }
            echo "<div>PHP is a....</div>";
            echo "<div>Your answer : $answer3</div>";
            echo "<div>Correct answer : Server Side Script</div>";
            echo "<br></br>";
            if ($answer4 == "127.0.0.0") { $totalCorrect++; }
            echo "<div>Localhost IP is...</div>";
            echo "<div>Your answer : $answer4</div>";
            echo "<div>Correct answer : 127.0.0.0</div>";
            echo "<br></br>";
            if ($answer5 == "India") { $totalCorrect++; }
            echo "<div>Which country are you visiting if you are in the Taj Mahal?</div>";
            echo "<div>Your answer : $answer5</div>";
            echo "<div>Correct answer : India</div>";
            echo "<br></br>";
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
 
 </div>
 
</body>
 
</html>