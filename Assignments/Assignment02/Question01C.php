<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question01C</title>
</head>
<body>
    <font face size = "5">
    <?php
    $x = 4;      //First number  
    $y = 5;     //Second number 
    echo "Before swapping the value of x is : $x";
    print "<br>";
    echo "Before swapping the value of y is : $y";
    echo "<hr>";
    $x = $x*$y;
    $y = $x/$y;
    $x = $x/$y;
    echo  "The value of x after swapping is : $x";
    echo "<br>";
    echo  "The value of y after swapping is : $y";
    ?>
    </font>
    <hr>
</body>
</html>