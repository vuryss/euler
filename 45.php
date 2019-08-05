<?php

$i = 143;
$start = microtime(true);

while (++$i) {
    $num = $i * (2 * $i - 1);

    if (!isPentagon($num)) {
        continue;
    }

    echo 'Answer: ' . $num . PHP_EOL;
    echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
    break;
}

function isPentagon($num) {
    $n = (1 + sqrt(1 + 24*$num)) / 6;
    return $n == (int) $n;
}
