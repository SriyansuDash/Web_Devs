<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question05</title>
</head>
<body>
    <font face size = "5">
    <?php
    $x = 395;
    $day = 365;
    $year = ($day/365);
    $month = (int) (($x%365)/30.5);

    echo "Day is $x <br>";
    echo "<br>";
    echo "Month is $month <br>";
    echo "<br>";
    echo "Year is $year <br>";
    ?>
    </font>
    <hr>
</body>
</html>