<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question01B</title>
</head>
<body>
    <font face size = "5">
    <?php
    $x = 4;     //First variable
    $y = 5 ;   //Second variable
    print "The value of x before swapping is $x"; echo "<br>";
    print "The value of y before swapping is $y";
    print "<hr>";
    // Swapping without using 3rd variable
    $x=$x+$y;
    $y=$x-$y;
    $x=$x-$y;
    print "The value of x after swapping $x"; echo "<br>";
    print "The value of y after swapping $y";
    ?>
    </font>
    <hr>
</body>
</html>