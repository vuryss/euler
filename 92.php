<?php

$start = microtime(true);
$cache89 = [];
$cache1 = [];
$count = 0;

for ($i = 2; $i < 10000000; $i++) {
    if (isset($cache1[$i])) {
        continue;
    }

    if (isset($cache89[$i])) {
        $count++;
        continue;
    }

    $chain = [$i => true];
    $number = $i;

    do {
        $sum = 0;

        foreach (str_split($number) as $digit) {
            $sum += $digit * $digit;
        }

        $chain[$sum] = true;

        if (isset($cache1[$sum]) || $sum === 1) {
            $cache1 += $chain;
            break;
        } elseif (isset($cache89[$sum]) || $sum === 89) {
            $count++;
            $cache89 += $chain;
            break;
        }

        $number = $sum;
    } while (true);
}

echo 'Answer: ' . $count . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
