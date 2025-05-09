<?php

function compressString($str) {
    $compressed = '';
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        $count = 1;

        while ($i + 1 < $length && $str[$i] == $str[$i + 1]) {
            $count++;
            $i++;
        }

        $compressed .= $str[$i] . $count;
    }

    return strlen($compressed) < $length ? $compressed : $str;
}

// Example usage
$input = "aaabbbcccd";
echo "Compressed String: " . compressString($input);
