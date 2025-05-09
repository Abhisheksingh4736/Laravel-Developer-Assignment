<?php

function reverseString($string)
{
    $reversed = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}


$original = "Hello World!";
echo "Original: " . $original . PHP_EOL;
echo "Reversed: " . reverseString($original) . PHP_EOL;

