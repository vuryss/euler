<?php

$current = 0;
$number = 0;

for ($i = 2; $i < 1000; $i++) {
    $remainders = [];
    $value      = 1;
    $position   = 0;

    while (!isset($remainders[$value])) {
        $remainders[$value] = $position++;
        $value = ($value * 10) % $i;
    }

    $cycles = $position - $remainders[$value];

    if ($cycles > $current) {
        $current = $cycles;
        $number = $i;
    }
}

echo 'Answer: ' . $number . PHP_EOL;
