<?php

$n = 20;
$grid = [];

for ($i = 0; $i < $n; $i++) {
    $grid[$i][$n] = 1;
    $grid[$n][$i] = 1;
}

for ($i = $n - 1; $i >= 0; $i--) {
    for ($j = $n - 1; $j >= 0; $j--) {
        $grid[$i][$j] = $grid[$i + 1][$j] + $grid[$i][$j + 1];
    }
}

echo 'Answer: ' . $grid[0][0] . PHP_EOL;
