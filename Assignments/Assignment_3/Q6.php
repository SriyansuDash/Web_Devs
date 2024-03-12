<?php
// Function to calculate the factorial of a number
function factorial($number) {
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Replace 5 with your desired number
$number = 5;
$result = factorial($number);
echo "The factorial of $number is $result";
?>