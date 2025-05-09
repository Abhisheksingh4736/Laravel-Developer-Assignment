<?php

$data = [
    ['id' => 1, 'name' => 'a'],
    ['id' => 2, 'name' => 'b'],
    ['id' => 3, 'name' => 'x'],
    ['id' => 4, 'name' => 'z'],
];

// Find the key where name = 'x'
$key = array_search('x', array_column($data, 'name'));

if ($key !== false) {
    echo "Key is: $key\n";
    print_r($data[$key]);
} else {
    echo "Name 'x' not found.\n";
}
