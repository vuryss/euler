<?php

$start = microtime(true);

$perimeters = [];

for ($a = 1; $a <= 500; $a++) {
    for ($b = $a + 1; $b <= 500; $b++) {
        for ($c = $b + 1; $c < 500; $c++) {
            if ($a*$a + $b*$b == $c * $c) {
                $p = $a + $b + $c;
                $perimeters[$p] = isset($perimeters[$p]) ? $perimeters[$p] + 1 : 1;
            }
        }
    }
}

echo 'Max perimeters: ' . max($perimeters) . PHP_EOL;
echo 'Answer: ' . array_search(max($perimeters), $perimeters) . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
