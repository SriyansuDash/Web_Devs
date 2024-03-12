<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }
    
    return true;
}

// Find and display prime numbers between 1 and 50
for ($i = 1; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>