<?php

$i = 0;
$pn = [];

$start = microtime(true);

while (++$i) {
    $num = $i * (3 * $i - 1) / 2;
    $pn[$i] = $num;

    for ($j = 1; $j < $i; $j++) {
        if (!isPentagon($num - $pn[$j]) || !isPentagon($num + $pn[$j])) {
            continue;
        }

        echo 'Answer: ' . ($num - $pn[$j]) . PHP_EOL;
        echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
        break 2;
    }
}

function isPentagon($num) {
    $n = (1 + sqrt(1 + 24*$num)) / 6;
    return $n == (int) $n;
}
