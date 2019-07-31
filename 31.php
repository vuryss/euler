<?php

$coins = [200, 100, 50, 20, 10, 5, 2, 1];

function countCounts($coins, $total = 200)
{
    $count = 0;

    foreach ($coins as $i => $coin) {
        if ($coin > $total) {
            continue;
        }

        if ($coin < $total) {
            $count += countCounts(array_slice($coins, $i), $total - $coin);
            continue;
        }

        $count++;
    }

    return $count;
}

$start = microtime(true);
echo 'Answer: ' . countCounts($coins, 200) . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
