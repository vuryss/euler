<?php

$names = explode(',', file_get_contents('./p022_names.txt'));
$names = array_map(function($a) { return trim($a, '"'); }, $names);
sort($names, SORT_STRING);

$values = array_flip(range('@', 'Z'));

$total = 0;

foreach ($names as $pos => $name) {
    $name = str_split($name);
    $sum = 0;

    foreach ($name as $char) {
        $sum += $values[$char];
    }

    $total += ($pos + 1) * $sum;
}

echo $total . PHP_EOL;
