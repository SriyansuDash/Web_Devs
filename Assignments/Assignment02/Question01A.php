<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Question01A</title>
</head>
<body>
    <font face size = "5">
    <?php
    $x = 4;     //First variable
    $y = 5;    //Second variable
    echo "The value of x before swapping is: $x";
    echo "<br>"; 
    echo "The value of y before swapping is: $y";
// Swapping using 3rd variable
echo "<hr>";
    $z=$x;
    $x=$y;
    $y=$z;
    echo "The value of x after swapping is :$x";
    echo "<br>";
    echo "The value of y after swapping is :$y";
    ?>
    </font>
    <hr>
</body>
</html>