<?php

$facts = [
    0 => 1,
    1 => 1,
    2 => 2,
    3 => 6,
    4 => 24,
    5 => 120,
    6 => 720,
    7 => 5040,
    8 => 40320,
    9 => 362880,
];

$found = [];

for ($i = 10; $i < 2540160; $i++) {
    $sum = 0;

    foreach (str_split($i) as $d) {
        $sum += $facts[$d];
    }

    if ($sum === $i) {
        $found[] = $i;
    }
}

echo 'Answer: ' . array_sum($found) . PHP_EOL;
