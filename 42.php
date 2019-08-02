<?php

// Get the array of words
$words = array_map(
    function($a) { return trim($a, '"'); },
    explode(',', trim(file_get_contents('./p042_words.txt')))
);

// Enumerate each letter value
$a = [];

foreach (range('A', 'Z') as $i => $letter) {
    $a[$letter] = $i + 1;
}

// Generate triangle numbers up to 200
$t = [];

for ($i = 1;; $i++) {
    $tn = ($i * ($i + 1)) / 2;

    if ($tn > 200) {
        break;
    }

    $t[$tn] = true;
}

// Count triangle words
$count = 0;

foreach ($words as $word) {
    $sum = array_sum(array_map(function($letter) use ($a) { return $a[$letter]; }, str_split($word)));

    if (isset($t[$sum])) {
        $count++;
    }
}

echo 'Answer: ' . $count . PHP_EOL;
