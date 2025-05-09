<?php

function findMissingNumber($arr, $n) {
    $expectedSum = $n * ($n + 1) / 2;
    $actualSum = array_sum($arr);
    return $expectedSum - $actualSum;
}

// Example usage
$numbers = [1, 2, 4, 5, 6]; 
$n = 6;
echo "Missing number is: " . findMissingNumber($numbers, $n);
