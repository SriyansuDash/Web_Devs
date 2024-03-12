<?php
// Number of rows in the pattern
$rows = 5;

// Loop to print the pattern
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>