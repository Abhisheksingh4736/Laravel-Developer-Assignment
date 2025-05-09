<?php

function longestCommonPrefix($strs) {
    if (empty($strs)) {
        return "";
    }

    // Find the shortest string in the array
    $minLength = min(array_map('strlen', $strs));

    $prefix = "";

    for ($i = 0; $i < $minLength; $i++) {
        $char = $strs[0][$i];

    
        foreach ($strs as $str) {
            if ($str[$i] !== $char) {
                return $prefix;
            }
        }

        $prefix .= $char;
    }

    return $prefix;
}

// Example usage
$strings = ["flower", "flow", "flight"];
echo "Longest Common Prefix: " . longestCommonPrefix($strings);
