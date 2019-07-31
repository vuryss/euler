<?php

$i = 10;
$numbers = [];
$last = 0;

while ($i++) {
    $sum = 0;
    foreach (str_split($i) as $digit) {
        $sum += pow($digit, 5);
    }

    if ($sum == $i) {
        $numbers[] = $i;
        $last = $i;
    }

    if ($i - $last > 500000) {
        break;
    }
}

echo 'Answer: ' . array_sum($numbers) . PHP_EOL;
