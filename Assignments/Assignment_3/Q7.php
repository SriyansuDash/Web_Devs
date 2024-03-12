<?php
// Function to reverse a string
function reverseString($str) {
    $reversed = strrev($str); // Using the built-in function strrev
    return $reversed;
}

// Replace 'Hello, World!' with your desired string
$string = 'Hello, World!';
$reversedString = reverseString($string);
echo "Original String: $string<br>";
echo "Reversed String: $reversedString";
?>.