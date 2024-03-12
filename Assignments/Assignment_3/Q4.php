<?php
// Function to calculate the sum of digits
function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }
    return $sum;
}

// Replace 123 with your desired number
$number = 123;
$sum = sumOfDigits($number);
echo "Sum of digits in $number is $sum";
?>