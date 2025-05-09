<?php

function reverseWords($sentence) {
   
    preg_match_all('/\S+/', $sentence, $matches);

    $words = $matches[0];  
    $reversed = array_reverse($words); 

    return implode(' ', $reversed);
}

$sentence = "PHP is awesome";
echo reverseWords($sentence); 
